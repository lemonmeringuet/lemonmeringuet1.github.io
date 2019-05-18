<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="css/style.css" />
<?php
error_reporting(0);
    include("responce.php");
    $newObj = new Ticket();
    $tics = $newObj->getTickets();
 ?>
</head>
 <body>
 <table id="ticket_grid" class="table" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>Personal Account №</th>
			<th>Name</th>
			<th>Trips</th>
			<th>Transport Type</th>
      		<th>Purchase Date</th>
      		<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($tics as $key => $tic) :?>
		<tr>
            <td><?php echo $tic['pa_id'] ?></td>
			<td><?php echo $tic['name'] ?></td>
			<td><?php echo $tic['trips'] ?></td>
			<td><?php echo $tic['transport_type'] ?></td>
      		<td><?php echo $tic['created'] ?></td>
     		<td><?php $tic['id']?>
     		<form action="delete.php" method="post" class="ajaxform" onsubmit="return confirm('Delete this record?');">
<input type="hidden" name="id" value="<?php echo $tic['id'] ?>">
<input type="submit" name="submit" value="Delete" class="btn btn-danger">
</form></td>
		</tr>
	<?php endforeach;?>
	</tbody>
</table>

</body>
<button class="btn btn-primary btn-lg btn-block" id="btn_info1">Back to buying tickets</button>
<script>
document.getElementById('btn_info1').onclick = function() {
    setTimeout(function() {
        window.location = 'index.php';
    }, 100);
};
</script>