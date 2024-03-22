<?php
$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Header Example</title>
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
  <a href="#" class="logo">
    <img src="logo.png" alt="Logo">
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
<div class="container">
    <h1 class="h3">Publications</h1>
    <p>========================================================</p>
    <?php foreach ($data as $publication) { ?>
    <div class="publication">
    <h1> Title : 
        <a href="/publication/details/<?= urlencode($publication->publication_id) ?>">
            <?= htmlspecialchars($publication->publication_title) ?>
        </a>
    </h1>
        <h3>Text: <?= $publication->publication_text ?></h3>
        <p>========================================================</p>
    </div>
<?php } ?>
</div>

</body>
</html>