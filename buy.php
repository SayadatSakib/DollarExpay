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

<?php include 'inc/header.php';?>


    <div id="body">
    	<br>
		<div class="card" style="margin-left: 10px; margin-right: 10px; background: #c12bff8c;">
		  <div class="card-header">
		    <h5 style="color: white; font-weight: bold;">BUY !</h5>
		  </div>
		  <div class="card-body">
       

            <?php
                if(isset($_GET["status"]))
                  {
                    if($_GET["status"]=="ok")
                        {
                            echo "<div id='status' style='color:#0afb27'>
                            <br><label>Transection Received Check Your Mail.</label>
                            </div>";
                        }
                  }
                               
            ?>
       

				<form style="margin-left: 1px; margin-right: 100px" action="buyAction.php" method="POST">
                  
                  

				  <div class="form-group" style="width: 250px">
				    <label for="exampleFormControlSelect1" style="color: #f8f9fa">Send Method:</label>
				    <select class="form-control" id="sm" name="SM"  onchange="SendMethod()">
				      <option value="BKash">BKash</option>
				      <option value="Rocket">Rocket</option>
				    </select>
				  </div>

				  <div class="form-group" style="width: 250px" ng-app="mainApp" ng-controller="myController">
				    <label for="exampleFormControlSelect1" style="color: #f8f9fa">Receive Method:</label>
            <select class="form-control" id="select" name="RM" onchange="resMethod(this.value)" ng-change="submitForm()" ng-model="SC"> 
                    <option ng-repeat="x in names">{{x}}</option>
            </select>

            <label for="exampleFormControlInput1" style="color: #f8f9fa">Receive Amount ($)</label>
            <input type="number" class="form-control" id="Receive" name="ReceiveAM" required step="any" min="1" max="1000" ng-change="submitForm()" ng-model="ram">
          
            <label for="exampleFormControlInput1" style="color: #f8f9fa">Send Amount (৳)</label>
            <input type="number" class="form-control" id="send" name="sendAM" readonly placeholder="0.00" ng-model="age">
          </div>

         <script type="text/javascript">
                 var mainApp = angular.module("mainApp", []);


                 mainApp.controller('myController', function($scope, $timeout) {

                    $scope.names = ["Perfect Money", "Skrill","Neteller","Advcash","Payoneer"];
                    $scope.SC = $scope.names[0];

                    var SK = document.getElementById("select").value;
                    $scope.submitForm = function() {

                        if($scope.SC== "Skrill" || $scope.SC== "Neteller"){
                          var x = $scope.ram * 97;
                          $scope.age = x;
                        }
                        else{
                          var x = $scope.ram * 90;
                          $scope.age = x;
                        }

                    }

                 });
        </script>

				  <div class="form-group" style="width: 250px">
				    <label id="phn" for="exampleFormControlInput1" style="color: #f8f9fa">BKash Number</label>
				    <input type="text" class="form-control" name="BRnum" required>
				  </div>

				  <div class="form-group" style="width: 250px">
				    <label id="tid" for="exampleFormControlInput1" style="color: #f8f9fa">BKash TRX ID</label>
				    <input type="text" class="form-control" name="TID" required>
				  </div>

				  <div class="form-group" style="width: 250px">
				    <label id="rmail" for="exampleFormControlInput1" style="color: #f8f9fa">Your Perfect Money ID</label>
				    <input type="text" class="form-control" name="Rmail" required>
				    <p style="color: black; font-weight: bold">
                           নিচের নাম্বারে টাকা পাঠানোর পর 
                           BUY Button-এ ক্লিক করুন।
                           <br>Cash Out From:
                    </p>       
                    <p id="noti" style="color: #f8f9fa">       
                           BKash: 01834272781 (Agent)
                           </b>
                    </p>
                    <input type="hidden" id="custId" name="Umail" value="<?php echo $_SESSION['c_email']; ?>">
                    <input class="btn btn-primary" type="submit" name="submit" value="BUY !">


				  </div>

				</form>

		  </div>
		</div>
		<br>

    </div>

<script>

function SendMethod() {
  var send = document.getElementById("sm").value;
  
      if (send == "BKash") {
          document.getElementById("phn").innerHTML = "BKash Number";
          document.getElementById("tid").innerHTML = "BKash TRX ID";
          document.getElementById("noti").innerHTML = "BKash: 01834272781 (Agent)</b>";
      }
      else {
          document.getElementById("phn").innerHTML = "Rocket Number+last digit ";
          document.getElementById("tid").innerHTML = "Rocket TRX ID";
          document.getElementById("noti").innerHTML = "Rocket: 017316102445 (Personal)</b>";
      }
      //alert(send);
}

function resMethod(value) {
  var send = document.getElementById("select").value;

      if (send == "Perfect Money") {
          document.getElementById("rmail").innerHTML = "Your Perfect Money ID";
      }
      if (send == "Payeer") {
          document.getElementById("rmail").innerHTML = "Your Payeer Email";
      }
      else if (send == "Skrill") {
          document.getElementById("rmail").innerHTML = "Your Skrill Email";
      }
      else if (send == "Neteller") {
          document.getElementById("rmail").innerHTML = "Your Neteller Email";
      }
      else if (send == "Advcash") {
          document.getElementById("rmail").innerHTML = "Your Advcash Email";
      }
      else if (send == "Payoneer") {
          document.getElementById("rmail").innerHTML = "Your Payoneer Email";
      }
      else if (send == "Payza") {
          document.getElementById("rmail").innerHTML = "Your Payza Email";
      }

      //alert(send);
}
</script>




<?php include 'inc/footer.php';?>

