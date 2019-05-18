<?php
include("connection.php");
class Receipt {
	protected $conn;
	protected $data = array();
	function __construct() {

		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}
	
	public function getReceipt() {
		$sql = "SELECT * FROM tickets ORDER BY id DESC LIMIT 1";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch tickets data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

}
?>