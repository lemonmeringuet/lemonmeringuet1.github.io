<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="css/style.css" />
<?php
    include("receipt.php");
    $newObj = new Receipt();
    $recs = $newObj->getReceipt();
 ?>
</head>
 <body>
 <center><h1>Tnanks for your purchase! Here's your receipt:</h1></center>
 <table id="ticket_grid" class="table" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>Personal Account №</th>
			<th>Name</th>
			<th>Trips</th>
			<th>Transport Type</th>
      		<th>Purchase Date</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($recs as $key => $rec) :?>
		<tr>
            <td><?php echo $rec['pa_id'] ?></td>
			<td><?php echo $rec['name'] ?></td>
			<td><?php echo $rec['trips'] ?></td>
			<td><?php echo $rec['transport_type'] ?></td>
      		<td><?php echo $rec['created'] ?></td>
             <!-- <td><button id="delete" type="button" class="delete" aria-hidden="true">&times;</button></td> -->
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