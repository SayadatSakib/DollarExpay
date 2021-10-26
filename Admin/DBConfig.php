<?php

class DBConfig{
	
	private $_host = "localhost:3306";
	private $_username = "dollarex_dollarexpay";
	private $_password = "dollarexpay2019";
	private $_database = "dollarex_pay";
	
	protected $connection;
	
	public function __construct(){
		if(!isset($this->connection)){
			$this->connection = new mysqli($this->_host,$this->_username,$this->_password,$this->_database);
			if(!$this->connection){
				echo "Connection Problem!";
				exit;
			}
		}
		
		return $this->connection;
	}
}


?>