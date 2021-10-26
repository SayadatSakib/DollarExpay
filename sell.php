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
		<div class="card" style="margin-left: 10px; margin-right: 10px;background: #c12bff8c;">
		  <div class="card-header">
		    <h5 style="color: white; font-weight: bold;">SELL !</h5>
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
       

				<form style="margin-left: 1px; margin-right: 100px" action="sellAction.php" method="POST">

				  
				  <div class="form-group" style="width: 250px" ng-app="mainApp" ng-controller="myController">

    				    <label for="exampleFormControlSelect1" style="color: #f8f9fa">Send Method:</label>
                <select class="form-control" id="sm" name="SM" onchange="senMethod(this.value)" ng-change="submitForm()" ng-model="SC"> 
                        <option ng-repeat="x in names">{{x}}</option>
                </select>

    				    <label for="exampleFormControlSelect1" style="color: #f8f9fa">Receive Method:</label>
    				    <select class="form-control" name="RM" id="rm" onchange="resMethod(this.value)">
    				      <option>BKash</option>
    				      <option>Rocket</option>
    				    </select>

    				    <label for="exampleFormControlInput1" style="color: #f8f9fa">Send Amount ($)</label>
                <input type="number" class="form-control" id="send" name="sendAM" required step="any" min="1" max="1000" ng-change="submitForm()" ng-model="sam">

    				    <label for="exampleFormControlInput1" style="color: #f8f9fa">Receive Amount ( ৳ )</label>
                <input type="number" class="form-control" id="Receive" name="ReceiveAM" readonly placeholder="0.00" ng-model="age">

				  </div>

          <script type="text/javascript">
                   var mainApp = angular.module("mainApp", []);


                   mainApp.controller('myController', function($scope, $timeout) {

                      $scope.names = ["Perfect Money", "Skrill","Neteller","Advcash","Payoneer"];
                      $scope.SC = $scope.names[0];

                      var SK = document.getElementById("sm").value;
                      $scope.submitForm = function() {
                          //alert(SK);
                          if($scope.SC== "Skrill" || $scope.SC== "Neteller"){
                            var x = $scope.sam * 88;
                            $scope.age = x;
                          }
                          else{
                            var x = $scope.sam * 83;
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
				    <label id="sc" for="exampleFormControlInput1" style="color: #f8f9fa">Your Perfect Money ID</label>
				    <input type="text" class="form-control" name="Smail" required>
                        <p ng-if="info.status == 'show'" class="ng-binding ng-scope">
							নিচের আইডি - এ ডলার সেন্ড করেন। <br>
                        	<strong id="cid" class="ng-binding" style="color: #f8f9fa">Perfect Money ID: U7539635</strong>
						</p>
                    <input class="btn btn-primary" type="submit" name="submit" value="SELL !">
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
          document.getElementById("sc").innerHTML = "Your Perfect Money ID";
          document.getElementById("cid").innerHTML = "Perfect Money ID: U7539635";
      }
      if (send == "Payeer") {
          document.getElementById("sc").innerHTML = "Payeer Email";
          document.getElementById("cid").innerHTML = "Payeer ID: U19288735";
      }
      else if (send == "Skrill") {
          document.getElementById("sc").innerHTML = "Your Skrill Email";
          document.getElementById("cid").innerHTML = "Skrill Email: mdshohelbd4646@gmail.com";
      }
      else if (send == "Neteller") {
          document.getElementById("sc").innerHTML = "Your Neteller Email";
          document.getElementById("cid").innerHTML = "Neteller Email: sauthhossain3@gmail.com";
      }
      else if (send == "Advcash") {
          document.getElementById("sc").innerHTML = "Your Advcash Email";
          document.getElementById("cid").innerHTML = "Advcash Email: mdshohelbd4646@gmail.com";
      }
      else if (send == "Payoneer") {
          document.getElementById("sc").innerHTML = "Your Payoneer Email";
          document.getElementById("cid").innerHTML = "Payoneer Email: sauthhossain3@gmail.com";
      }
      else if (send == "Payza") {
          document.getElementById("sc").innerHTML = "Payza Email";
          document.getElementById("cid").innerHTML = "Payza ID: U19288735";
      }

      //alert(send);
}

function resMethod(value) {
  var send = document.getElementById("rm").value;
  
      if (send == "BKash") {
          document.getElementById("phn").innerHTML = "BKash Number";
      }
      else {
          document.getElementById("phn").innerHTML = "Rocket Number+last digit";
      }
      //alert(send);
}
</script>


<?php include 'inc/footer.php';?>