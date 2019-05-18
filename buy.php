<?php
                 
//error_reporting(0);
        //include("add.php");
    $pa_id = pg_escape_string($_POST['pa_id']);
    $name = pg_escape_string($_POST['name']);
    $trips = pg_escape_string($_POST['trips']);
    $transport_type = pg_escape_string($_POST['transport_type']);

    $query = "INSERT INTO tickets (pa_id, name, trips, transport_type) VALUES ('".$pa_id."', '".$name."', '".$trips."', '".$transport_type."')";

$conn = pg_pconnect("dbname=postgres");

if (pg_query($conn, $query)) {
       header("Location: last_tic_info.php");
} else {
      $Message = urlencode("User with this personal account already exists");
		header("Location: index.php?Message=".$Message);
die;
}
pg_close($conn);


 ?>

