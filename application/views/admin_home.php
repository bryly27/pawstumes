<html>
<head>
	<title>Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script async src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
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
		<form action='/pawstumes/add_link' method='post'>
			<p>If it is a youtube link, upload the embed url src only!!!!: (ex. https://www.youtube.com/embed/21FYAXVV4Jw)</p>
			<input type='text' name='link' placeholder='Add a link'>
			<input type='text' name='description' placeholder='Add a quick description'>
			<select name='file_type'>
				<option>photo</option>
				<option>video</option>
			</select>
			<input type='submit' value='Add'>
			<input type='hidden' name='action' value='add'>
		</form>

<?php  
			foreach($pets as $pet)
			{
				if($pet['file_type'] == 'video')
				{ ?>
					<div class='pets'>
						<iframe width='50%' height="45%" src="<?= $pet['link'] ?>" frameborder="0" allowfullscreen alt='<?= $pet['description'] ?>'></iframe>
						<p><?= date("F d, Y", strtotime($pet['created_at'])) ?></p>
					</div>
					<form action='/pawstumes/delete/<?= $pet['id'] ?>' method='post'>
						<input type='submit' value='Delete'>
						<input type='hidden' name='action' value='delete'>
					</form>
					<form action='/pawstumes/edit' method='post'>
						<h4>Edit top photo description: </h4>
						<input type='text' name='description' value='<?= $pet['description'] ?>'>
						<input type='submit' value='Submit'>
						<input type='hidden' name='action' value='edit'>
						<input type='hidden' name='id' value='<?= $pet['id'] ?>'>
					</form>
<?php		}
				else
				{ ?>
					<div class='pets'>
							<img src='<?= $pet['link']?>'>
							<p><?= date("F d, Y", strtotime($pet['created_at'])) ?></p>
					</div>
					<form action='/pawstumes/delete/<?= $pet['id'] ?>' method='post'>
						<input type='submit' value='Delete'>
						<input type='hidden' name='action' value='delete'>
					</form>
					<form action='/pawstumes/edit' method='post'>
						<h4>Edit top photo description: </h4>
						<input type='text' name='description' value='<?= $pet['description'] ?>'>
						<input type='submit' value='Submit'>
						<input type='hidden' name='action' value='edit'>
						<input type='hidden' name='id' value='<?= $pet['id'] ?>'>
					</form>
<?php		}
			}
?>
	</div>

	<!-- =================end of photos =================== -->

</body>
</html>