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
<div class="container">
    <h1 class="h3">User's Publications</h1>
    <p>========================================================</p>
    <?php foreach ($data as $publication) { ?>
    <div class="publication">
        <h1>Title: <?= $publication->publication_title ?></h1>
        <p>Text: <?= $publication->publication_text ?></p>

        <a href='/Publication/edit'>Modify my post</a><br>
        <div class='container'>
        <form method='post' action='/Publication/delete'>
                <div class="form-group">
            <input type="submit" name="action" value="Delete Post"/>
          </div>
        </form>
      </div>
        <p>========================================================</p>
    </div>
<?php } ?>
</div>

</body>
</html>