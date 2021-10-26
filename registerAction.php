<?php
	
	include_once 'Crud.php';
	session_start();
	
	$crud = new Crud();
	
	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		
		
		$result = $crud->execute("INSERT into user(u_name,email,password) VALUES('$uname','$email','$password')");
		
		if($result){
			$_SESSION['c_email'] = $email;
			$_SESSION['c_uname'] = $uname;
			$_SESSION['start'] = time(); // Taking now logged in time.
	        // Ending a session in 30 minutes from the starting time.
	        $_SESSION['c_expire'] = $_SESSION['start'] + (20 * 60);
			header("Location:index.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>