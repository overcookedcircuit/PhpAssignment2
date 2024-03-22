<?php
$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $name ?> view</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  /* Minimal styles for demonstration purposes */
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
</head>
<body>

<header class="header">
  <a href="/Publication/main" class="logo">
    Social Posting
  </a>
  <form method="post" action="/search">
    <input type="text" name="search" placeholder="Search..." value="<?= $searchTerm ?>">
    <button title="search">🔍</button>
</form>
  <div class="buttons">
  <a href="/User/login" class="btn btn-primary" role="button" title = "Log In">1️⃣</a>
    <a href="/Publication/create" class="btn btn-primary" role="button" title = "New Publication">➕</a>
    <a href="/Profile/profileView" class="btn btn-primary" role="button" title = "My Profile">👤</a>
  </div>
</header>

<div class='container-sm'>
    <p class="h3">New Publication</p>
</div>

<form method='post' action=''>

  <div class="container-sm">
	  <label>Publication:<textarea type="text" class="form-control" name="publication_text" placeholder="Write your message"> </textarea></label>
  </div>

  <div class="container-sm">
	  <label>Title: <input type="text" class="form-control" name="publication_title" placeholder="Write your title"></label>
  </div>

  <div class="container-sm">
	  <label>
      Status: <br>
      </label> <br>
        Public<input type="radio" class="form-control" name="publication_status" value="Public">
        Private<input type="radio" class="form-control" name="publication_status" value="Private">
    </label>
  </div>

  <div class="container-sm">
	  <input type="submit" name="action" value="Publish"/>
	  <a href='/Publication/main'>Cancel</a>
  </div>
</form>

</body>
</html>