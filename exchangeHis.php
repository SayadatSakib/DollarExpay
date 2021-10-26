<?php

    session_start();
    if(!isset($_SESSION['c_email']))
    {
        header("location:login.php");
    }
    else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['c_expire']) {
        session_destroy();
        //header("location:ManagerLogin.php");
    }
    }

?>


<?php
    header("Access-Control-Allow-Origin: *"); /*sir Question*/

    include_once 'Crud.php';
    $umails = $_SESSION['c_email'];
    $crud = new Crud();

    $exquery = "Select * from exchange_table where user_email='$umails' order by id DESC";

    $exresult = $crud->getData($exquery);

?>

<?php include 'inc/header.php';?>

    <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}
    </style>

    <div id="body">
    	<br>
		<div class="card" style="margin-left: 10px; margin-right: 10px;">
		  <div class="card-header">
		    <h4 style="color: black; font-weight: bold">Transection History !</h4>
		  </div>
		  <div class="card-body">
              <div>
                <label style="color: black; font-weight: bold">Your Exchange Transections:</label>
              </div>

                          <div style="overflow-x:auto;">
                           <table class="table table-sm">
                                <thead class="bg-danger">
                                    <tr>
                                        <th scope="col">Send</th>
                                        <th scope="col">Receive</th>
                                        <th scope="col">Send($)</th>
                                        <th scope="col">Receive(TK)</th>
                                        <th scope="col">Send AC/</th>
                                        <th scope="col">Receive AC/</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($exresult as $key=>$res){
                                            echo "<tr >";
                                                echo "<td>".$res['send_method']."</td>";
                                                echo "<td>".$res['receive_method']."</td>";
                                                echo "<td>".$res['send_amount']."</td>";
                                                echo "<td>".$res['receive_amount']."</td>";                                    
                                                echo "<td>".$res['send_AC_email']."</td>";
                                                echo "<td>".$res['receive_AC_email']."</td>";
                                                echo "<td>".$res['dates']."</td>";
                                                echo "<td>".$res['status']."</td>";                                    
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                          </div>

		  </div>
		</div>

    </div>

<?php include 'inc/footer.php';?>