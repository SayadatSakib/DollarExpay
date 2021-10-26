<?php

    session_start();
    if(!isset($_SESSION['email']))
    {
        header("location:login.php");
    }
    else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire']) {
        session_destroy();
        //header("location:ManagerLogin.php");
    }
    }

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

    <script type="text/javascript">
            $(document).ready(function(){
        
                    $.get('exchangeView.php',function(data){
                    $('#data-show').html(data);
                    })

              })
    </script>


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
                        <div id="edit-form">

                        </div>
                        <div style="overflow-x:auto;" id="data-show">

                        </div>
          </div>
        </div>

    </div>

<?php include 'inc/footer.php';?>    
