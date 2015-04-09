<html>
<head>
	<title>Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>
<body>	
	<div class='row'>
		<div class='col-md-12 col-xs-12 header container'>
			<h1>Pawstumes Admin</h1>
			<a href="/pawstumes/logout">Log Out</a>
		</div>
	</div>


<!-- ==============photos================ -->
	<div class='pet_photos'>
		<form action='/pawstumes/add_photo' method='post'>
			<input type='text' name='link' placeholder='Add a link'>
			<input type='text' name='description' placeholder='Add a quick description'>
			<input type='submit' value='Add'>
			<input type='hidden' name='action' value='add'>
		</form>
<?php 
			foreach($pets as $pet)
			{ ?>
				<div class='pets'>
						<img src='<?= $pet['link']?>'>
						<p><?= date("F d, Y", strtotime($pet['created_at'])) ?></p>
				</div>
				<form action='/pawstumes/delete/<?= $pet['id'] ?>' method='post'>
					<input type='submit' value='Delete'>
					<input type='hidden' name='action' value='delete'>
				</form>
<?php	} ?>
	</div>

	<!-- =================end of photos =================== -->

</body>
</html>