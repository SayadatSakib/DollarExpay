<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	if(isset($_POST['submit'])){
		$SM = $_POST['SM'];
		$RM = $_POST['RM'];
		$ReceiveAM = $_POST['ReceiveAM'];
		$sendAM = $_POST['sendAM'];
		$BRnum = $_POST['BRnum'];
		$TID = $_POST['TID'];
		$Rmail = $_POST['Rmail'];
        $Umail = $_POST['Umail'];
        $date = date("Y-m-d");
        $status = "Received";

		$result = $crud->execute("INSERT into buy_table(send_method,receive_method,receive_amount,send_amount,BKash_Rocket,TRX_ID,receive_currency,user_email,dates,status) VALUES('$SM','$RM','$ReceiveAM','$sendAM','$BRnum','$TID','$Rmail','$Umail','$date','$status')");
		
		if($result){
			header("location:buy.php?status=ok");
		}else{
			echo "Insertion Problem!";
			echo $date;
		}
		
	}
	
	
?>