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
		<div class="card" style="margin-left: 10px; margin-right: 10px;
		background:#e6f706c2;">
		  <div class="card-header">
		    <h5>Exchange !</h5>
		  </div>
		  <div class="card-body">
       

            <?php
                if(isset($_GET["status"]))
                  {
                    if($_GET["status"]=="ok")
                        {
                            echo "<div id='status' style='color:#F44336'>
                            <br><label>Transection Received Check Your Mail.</label>
                            </div>";
                        }
                  }
                               
            ?>


				<form style="margin-left: 1px; margin-right: 100px" action="exchangeAction.php" method="POST">

				  
				  <div class="form-group" style="width: 260px" ng-app="mainApp" ng-controller="myController">
				    <label for="exampleFormControlSelect1">Send Method:</label>
                <select class="form-control" id="sm" name="SM" onchange="senMethod(this.value)" ng-change="submitForm()" ng-model="SC"> 
                        <option ng-repeat="x in names">{{x}}</option>
                </select>



				    <label for="exampleFormControlSelect1">Receive Method:</label>
                <select class="form-control" id="rm" name="RM" onchange="resMethod(this.value)" ng-change="submitForm()" ng-model="RC"> 
                        <option ng-repeat="x in res">{{x}}</option>
                </select>



				    <label for="exampleFormControlInput1">Send Amount ($)</label>
            <input type="number" class="form-control" id="send" name="sendAM" required step="any" min="0" ng-change="submitForm()" ng-model="sam">

				    <label for="exampleFormControlInput1">Receive Amount ($)</label>
            <input type="number" class="form-control" id="Receive" name="ReceiveAM" readonly placeholder="0.00" ng-model="age">
				  </div>


          <script type="text/javascript">
                   var mainApp = angular.module("mainApp", []);


                   mainApp.controller('myController', function($scope, $timeout) {

                      $scope.names = ["Perfect Money", "Skrill","Neteller","Advcash","Payoneer"];
                      $scope.SC = $scope.names[0];

                      $scope.res = ["Perfect Money", "Skrill","Neteller","Advcash","Payoneer"];
                      $scope.RC = $scope.names[1];                      

                      var SK = document.getElementById("sm").value;
                      $scope.submitForm = function() {
                          //alert(SK);
                          if($scope.SC== "Skrill" || $scope.SC== "Neteller"){
                            var y = $scope.sam * .30;
                            var x = $scope.sam - y;
                            $scope.age = x;
                          }
                          else{
                            var y = $scope.sam * .20;
                            var x = $scope.sam - y;
                            $scope.age = x;
                          }

                      }

                   });
          </script>           


				  <div class="form-group" style="width: 260px">
				    <label id="smail" for="exampleFormControlInput1">Your Perfect Money ID</label>
				    <input type="text" class="form-control" name="Smail" required>
				  </div>

				  <div class="form-group" style="width: 260px">
				    <label id="rmail" for="exampleFormControlInput1">Your Skrill Email</label>
				    <input type="text" class="form-control" name="Rmail" required> <br>

                    <input class="btn btn-primary" type="submit" name="submit" value="Exchange !">
                    <input type="hidden" id="custId" name="Umail" value="<?php echo $_SESSION['c_email']; ?>">
				  </div>

				</form>

		  </div>
		</div>
		<br>

    </div>

<script>

function senMethod(value) {
  var send = document.getElementById("sm").value;
  
      if (send == "Perfect Money") {
          document.getElementById("smail").innerHTML = "Your Perfect Money ID";
      }
      if (send == "Payeer") {
          document.getElementById("smail").innerHTML = "Your Payeer Email";
      }
      else if (send == "Skrill") {
          document.getElementById("smail").innerHTML = "Your Skrill Email";
      }
      else if (send == "Neteller") {
          document.getElementById("smail").innerHTML = "Your Neteller Email";
      }
      else if (send == "Advcash") {
          document.getElementById("smail").innerHTML = "Your Advcash Email";
      }
      else if (send == "Payoneer") {
          document.getElementById("smail").innerHTML = "Your Payoneer Email";
      }
      else if (send == "Payza") {
          document.getElementById("smail").innerHTML = "Your Payza Email";
      }

      //alert(send);
}

function resMethod(value) {
  var send = document.getElementById("rm").value;
  
      if (send == "Payeer") {
          document.getElementById("rmail").innerHTML = "Your Payeer Email";
      }
      if (send == "Perfect Money") {
          document.getElementById("rmail").innerHTML = "Your Perfect Money ID";
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