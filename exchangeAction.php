<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	if(isset($_POST['submit'])){
		$SM = $_POST['SM'];
		$RM = $_POST['RM'];
		$sendAM = $_POST['sendAM'];
		$ReceiveAM = $_POST['ReceiveAM'];
		$Smail = $_POST['Smail'];
		$Rmail = $_POST['Rmail'];
        $Umail = $_POST['Umail'];
        $date = date("Y-m-d");
        $status = "Received";

		$result = $crud->execute("INSERT into exchange_table(send_method,receive_method,send_amount,receive_amount,send_AC_email,receive_AC_email,user_email,dates,status) VALUES('$SM','$RM','$sendAM','$ReceiveAM','$Smail','$Rmail','$Umail','$date','$status')");
		
		if($result){
			header("location:exchange.php?status=ok");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>