<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class='container-sm'>
        <p class="h3">Edit your profile here</p>
    </div>
	<div class='container'>
		<form method='post' action=''>
			<div class="form-group">
				<label>Firstname:<input type="text" class="form-control" name="first_name" placeholder="Jon" value=<?= $data->first_name ?> /></label>
			</div>
			<div class="form-group">
				<label>Middlename:<input type="text" class="form-control" name="middle_name" placeholder="Middlename" value=<?= $data->middle_name ?> ></label>
			</div>
            <div class="form-group">
				<label>Lastname:<input type="text" class="form-control" name="last_name" placeholder="Lastname" value=<?= $data->last_name ?> /></label>
			</div>
            <div class="form-group">
				<input type="submit" name="action" value="Modify"/>
				<input type="submit" name="action" value="Cancel"/>
			</div>
		</form>
	</div>

	<div class='container'> 
		<a href='/User/logout'>Logout</a>
	</div>
</body>
</html>