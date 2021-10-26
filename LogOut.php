<?php
session_start();

$_SESSION = array();

session_destroy();
if(!isset($_SESSION['c_email'])){
	header('location:index.php');
}
?>