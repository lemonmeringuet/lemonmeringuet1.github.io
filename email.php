<?php
$email = pg_escape_string($_POST['email']);
$query = "INSERT INTO newsletter (email) VALUES ('".$email."')";
$conn = pg_pconnect("dbname=postgres");

if (pg_query($conn, $query)) {
       echo 'Tnanks for sharing your email!';
} else {
      $Message = urlencode("You're already subscribed to our newsletter");
		header("Location: index.php?Message=".$Message);
die;
}
pg_close($conn);

?>
<script>
window.setTimeout(function() {
    window.location = 'index.php';
  }, 3000);
</script>
<p>You'll be redirected in a few seconds!</p>


