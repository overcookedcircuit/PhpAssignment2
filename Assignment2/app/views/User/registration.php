<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<header>
    <h1 class="display-1">Welcome to our Social Publication and Commenting App</h1>
</header>
<body>
    <div class='container-sm'>
        <p class="h3">To create your account, please provide a username and password</p>
    </div>
	<div class='container'>
		<form method='post' action=''>
			<div class="form-group">
				<label>Username:<input type="text" class="form-control" name="username" placeholder="Jon" /></label>
			</div>
			<div class="form-group">
				<label>Password:<input type="password" class="form-control" name="password" placeholder="password" /></label>
			</div>

			<div class="form-group">
				<input type="submit" name="action" value="Register" /> 
				<a href='send to login page'>I have an account, bring me to the login page</a>
			</div>
		</form>
	</div>
</body>
</html>