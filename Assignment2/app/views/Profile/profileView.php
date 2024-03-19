<?php require_once '../layout/header.php'; ?>
<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<header>
    <h1 class="display-1">Profile</h1>
</header>
<body>
<div class='container'>
		<h1>User profile</h1>
		<dl>
		<dt>First name:</dt>
		<dd><?= $data->first_name ?></dd>
		<dt>Last name:</dt>
		<dd><?= $data->last_name ?></dd>
		</dl>
		<a href='/Profile/profileEdit'>Modify my profile</a>
	</div>

	<div class='container'> 
		<a href='/User/logout'>Logout</a>
	</div>
</body>
</html>