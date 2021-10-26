<?php

	include_once 'Crud.php';
	
	$crud = new Crud();
	
		$id = $_POST['id'];
		$status = $_POST['status'];
		
		$result = $crud->execute("Update buy_table SET status='$status' where id=$id");
		
		if($result){
			echo true;
		}else{
			echo false;
		}	
	
?>