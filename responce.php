<?php
include("connection.php");
class Ticket {
	protected $conn;
	protected $data = array();
	function __construct() {

		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}
	
	public function getTickets() {
		$sql = "SELECT * FROM tickets ORDER BY id";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch tickets data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}

}
?>
