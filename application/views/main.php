<html>
<head>
	<title>Pawstumes</title>
<link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon"/>
<meta name='description' content='Visit our site to find a friendly photo of a pet in a costume. Visit daily to see newly added photos. Pets in costume. Dogs and cats in costume.'>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>	
	<div class='row'>
		<div class='col-md-12 col-xs-12 header container'>
			<h1>Pawstumes</h1>
		</div>
	</div>

<!-- pawstumes_ad1 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6439372639315752"
     data-ad-slot="3551918823"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

	<div class='pet_photos'>

<?php  
			foreach($pets as $pet)
			{

				if($pet['file_type'] == 'photo')
				{ ?>
					<div class='pets'>
							<img src='<?= $pet['link']?>' alt='<?= $pet['description'] ?>'>
							<p><?= date("F d, Y", strtotime($pet['created_at'])) ?></p>
					</div>
<?php		}
				else
				{ ?>
					<div class='pets'>
						<iframe width='50%' height="45%" src="<?= $pet['link'] ?>" frameborder="0" allowfullscreen alt='<?= $pet['description'] ?>'></iframe>
						<p><?= date("F d, Y", strtotime($pet['created_at'])) ?></p>
					</div>
<?php		}
			}
?>
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