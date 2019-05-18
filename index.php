<?php
    include("responce.php");
    $newObj = new Ticket();
    $tics = $newObj->getTickets();
    error_reporting(0);
    if(isset($_GET['Message'])){
    echo $_GET['Message'];
}
 ?>

<head>
<title>Kiosk</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/style.css" />


</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Subscribe now</h1>
						</div>
						<form action="buy.php" method="post" id="frm_add">
							<div class="">
								<div class="">
									<div class="form-group">
                    <label for="pa_id" class="control-label">Personal Account:</label>
                    <input type="number" min="1000" max="9999" pattern="[1-9]{1}-[0-9]{3}" class="form-control" id="pa_id" name="pa_id" placeholder="Enter your personal account №" required />

                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">Name:</label>
                    <input type="text" pattern="^[a-zA-Z]+$" class="form-control" id="name" name="name" placeholder="Enter your name" required/>
                  </div>

<div class="parent-sel">
  <div class="child-sel">
                  <div class="form-group">
                    <label for="trips" class="control-label">Trips Amount:</label>
                    <select for="trips" id="trips" name="trips" size="1" form="frm_add">
                            <option selected="selected" value="5">5</option>
                             <option value="10">10</option>
                             <option value="20">20</option>
                             <option value="50">50</option>
                             <option value="90">90</option>
                     </select>
                   </div>

                  </div>
<div class="child-sel1">
                  <div class="form-group">
                    <label for="transport_type" class="control-label">Transport Type:</label>
                    <select for="transport_type" id="transport_type" name="transport_type" size="1" form="frm_add">
                            <option selected="selected" value="Tram">Tram</option>
                             <option value="Trolley">Trolley</option>
                             <option value="Bus">Bus</option>
                             <option value="Metro">Metro</option>
                     </select></div>
                   </div>
              <div class="form-btn"><br>
                 <input type="submit" name="buy-btn" value="Buy" id="submit-btn" class="submit-btn">
                  </div>
                </form>
                  <hr>
                  <form action="email.php" method="post" id="frm_email">
                  <label for="email" class="control-label">Enter your email to access our newsletter:</label>
                  <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email" form="frm_email" required><br>
                  <input type="submit" name="send-btn" value="Send email" id="submit-btn" class="submit-btn">
                </form>
                <label class="control-label child-sel">Follow us: <a href="https://www.facebook.com/facebook/" class="fa fa-facebook"></a>
<a href="https://twitter.com/Twitter" class="fa fa-twitter"></a>
<a href="https://www.instagram.com/instagram" class="fa fa-instagram"></a></label><label class="control-label child-sel1">Contact us: <a href="tel:+380663370139">+38(066)-337-01-39</a></label>
											</div>
										</div>
									</div>
								</div>
							</div>

            </div>
					</div>
				</div>
</body>

<button class="btn btn-secondary btn-lg btn-block" id="btn_info">Admin's panel</button>
<script>
document.getElementById('btn_info').onclick = function() {
    setTimeout(function() {
        window.location = 'login.php';
    }, 100);
};
</script>
