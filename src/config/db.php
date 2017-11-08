<?php 
	 class db {
	 	private $dbhost = ''; // Enter Host Name
	 	private $dbuser = '';  // Enter User Name
	 	private $dbpass = ''; // Enter Database Password
	 	private $dbname = '';  // Enter Database Name
	 
	 	public function connect(){
	 		$mysql_connect = "mysql:host=$this->dbhost;dbname=$this->dbname;";
	 	$con = new PDO($mysql_connect,$this->dbuser,$this->dbpass);
	 	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	return $con;
	 	}
	 }