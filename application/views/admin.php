<html>
<head>
	<title>Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script async src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/css/admin_login.css">
</head>
<body>	
	<form action='/pawstumes/login' method='post'>
		<input type='text' name='username' placeholder='Username'><br>
		<input type='password' name='password' placeholder='Password'><br> 
		<input type='submit' value='Enter'>
		<input type='hidden' name='action' value='login'>
	</form>

</body>
</html>