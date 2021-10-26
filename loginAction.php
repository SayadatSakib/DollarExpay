<?php

	session_start();

	include_once 'Crud.php';
	
	$crud = new Crud();

    if(isset($_POST['submit'])){

	  $email = $_POST['email'];
	  $password = md5($_POST['password']);
	  
	  
	  $query = "select * from user where email='$email' AND password='$password'";
	
	  $result = $crud->getData($query);
	if($result) {
		foreach($result as $res){
			$email = $res['email'];
			$u_name = $res['u_name'];
		}
		$_SESSION['c_email'] = $email;
		$_SESSION['c_uname'] = $u_name;
		$_SESSION['start'] = time(); // Taking now logged in time.
        // Ending a session in 30 minutes from the starting time.
        $_SESSION['c_expire'] = $_SESSION['start'] + (60 * 60);
		header("location:index.php");
	}else{
        header("location:login.php?status=NotOk");
	}
	
  }
	
?>