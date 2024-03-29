
<?php
$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';
?>
<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
	body {
    font-family: Arial, sans-serif;
  }
  .header {
    display: flex;
    align-items: center;
    padding: 10px;
    background-color: #f4f4f4;
  }
  .logo {
    margin-right: 20px;
    display: flex;
    align-items: center;
    text-decoration: none;
    color: black;
  }
  .logo img {
    height: 50px;
    margin-right: 10px;
  }
  .search-bar {
    margin-right: 10px;
    display: flex;
    align-items: center;
  }
  .search-bar input {
    padding: 5px;
  }
  .buttons {
    display: flex;
  }
  .buttons button {
    margin-left: 5px;
    padding: 5px;
  }
</style>
<header class="header">
  <a href="/Publication/main" class="logo">
    Social Posting
  </a>
  <form method="post" action="/search">
    <input type="text" name="search" placeholder="Search..." value="<?= $searchTerm ?>">
    <button title="search">🔍</button>
</form>
  <div class="buttons">
  <a href="/User/logout" class="btn btn-primary" role="button" title = "Login/Logout">1️⃣</a>
    <a href="/Publication/create" class="btn btn-primary" role="button" title = "New Publication">➕</a>
    <a href="/Profile/profileView" class="btn btn-primary" role="button" title = "My Profile">👤</a>
  </div>
</header>
<body>
<div class='container'>
		<h1 class="display-1">User profile</h1>
		<dl>
		<dt>First name:</dt>
		<dd><?= $data->first_name ?></dd>
		<dt>Middle name:</dt>
		<dd><?= $data->middle_name ?></dd>
		<dt>Last name:</dt>
		<dd><?= $data->last_name ?></dd>
		</dl>
		<a href='/Profile/profileEdit'>Modify my profile</a><br>
    <a href='/Publication/seeUserPost/<?php echo $data->profile_id; ?>'>View all posts from the user</a>
	</div>
  

</body>
</html>