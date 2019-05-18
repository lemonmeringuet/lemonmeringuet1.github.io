 <?php  
        $db = pg_connect("host=localhost dbname=postgres user=denis password= connect_timeout=5"); 
        $id = $_POST['id'];

        $sql2 = "DELETE FROM tickets WHERE id='$id'";

        $result = pg_query($sql2);
        $cmdtuples = pg_affected_rows($result);
        echo $cmdtuples . " record deleted.\n";
        if (!$result) {
            $errormessage = pg_last_error();
            echo "Error with query: " . $errormessage;
            exit();
        }
        pg_close();

        ?>
        <script>
window.setTimeout(function() {
    window.location = 'tic_info.php';
  }, 3000);
</script>
<p>You'll be redirected in a few seconds!</p>