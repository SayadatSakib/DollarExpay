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

    $sellquery = "Select * from sell_table where user_email='$umails' order by id DESC";

    $sellresult = $crud->getData($sellquery);

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
    </style>


    <div id="body">
    	<br>
		<div class="card" style="margin-left: 10px; margin-right: 10px; background: #1b053e94;">
		  <div class="card-header">
		    <h4 style="color: white; font-weight: bold">Transection History !</h4>
		  </div>
		  <div class="card-body">
              <div>
                <label style="color: white; font-weight: bold">Your Sell Transections:</label>
              </div>

                    <div style="overflow-x:auto;">
                       <table class="table table-bordered table-dark table-sm">
                            <thead class="bg" style="background-color: #c3ae14bd;">
                                <tr>
                                    <th scope="col">Send</th>
                                    <th scope="col">Receive</th>
                                    <th scope="col">Send($)</th>
                                    <th scope="col">Receive(TK)</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Account</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($sellresult as $key=>$res){
                                        echo "<tr >";
                                            echo "<td>".$res['send_method']."</td>";
                                            echo "<td>".$res['receive_method']."</td>"; 
                                            echo "<td>".$res['send_amount']."</td>";
                                            echo "<td>".$res['receive_amount']."</td>";
                                            echo "<td>".$res['BKash_Rocket']."</td>";
                                            echo "<td>".$res['send_currency']."</td>";
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