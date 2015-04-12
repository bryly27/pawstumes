<html>
<head>
	<title>Pawstumes | Pets in Costumes</title>
<link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon"/>
<meta name='description' content='Visit our site to find a friendly photo of a pet in a costume. Visit daily to see newly added photos. Pets in costume. Dogs and cats in costume.'>
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
			<h1>Pawstumes</h1>
		</div>
	</div>
	<div class='pet_photos'>

<?php 
			foreach($pets as $pet)
			{ ?>
				<div class='pets'>
						<img src='<?= $pet['link']?>' alt='<?= $pet['description'] ?>'>
						<p><?= date("F d, Y", strtotime($pet['created_at'])) ?></p>
				</div>
<?php	} ?>
	</div>



</body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61671565-1', 'auto');
  ga('send', 'pageview');

</script>

</html>