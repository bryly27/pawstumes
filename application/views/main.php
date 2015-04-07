<html>
<head>
	<title>Pawstumes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>
<body>	
	<div class='row'>
		<div class='col-md-12 col-xs-12 header container'>
			<h1>Pawstumes</h1>
		</div>
	</div>
	<div class='pet_photos'>

<?php 
			foreach($pets as $pet)
			{ ?>
				<div class='pets'>
						<img src='<?= $pet['link']?>'>
						<p><?= date("F d, Y", strtotime($pet['created_at'])) ?></p>
				</div>
<?php	} ?>
	</div>
	
</body>
</html>