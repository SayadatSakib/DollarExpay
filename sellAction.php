<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	if(isset($_POST['submit'])){
		$SM = $_POST['SM'];
		$RM = $_POST['RM'];
		$sendAM = $_POST['sendAM'];
		$ReceiveAM = $_POST['ReceiveAM'];
		$BRnum = $_POST['BRnum'];
		$Smail = $_POST['Smail'];
        $Umail = $_POST['Umail'];
        $date = date("Y-m-d");
        $status = "Received";

		$result = $crud->execute("INSERT into sell_table(send_method,receive_method,send_amount,receive_amount,BKash_Rocket,send_currency,user_email,dates,status) VALUES('$SM','$RM','$sendAM','$ReceiveAM','$BRnum','$Smail','$Umail','$date','$status')");
		
		if($result){
			header("location:sell.php?status=ok");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>