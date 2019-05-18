<?php

Class dbObj{
	/* Database connection start */
	var $servername = "localhost";
	var $username = "denis";
	var $password = "";
	var $dbname = "postgres";
	var $port = "5432";
	var $conn;
	function getConnstring() {
		$con = pg_connect("host=localhost dbname=postgres user=denis password= connect_timeout=5") or die("Connection failed: ".pg_last_error());

		/* check connection */
		if (pg_last_error()) {
			echo 'Connect failed';
			exit();
		} else {
			$this->conn = $con;
		}
		return $this->conn;
	}
}
?>