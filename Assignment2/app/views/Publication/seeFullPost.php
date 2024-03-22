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
<div class="container">
    <h1 class="h3">User Publications</h1>
    <p>========================================================</p>



</div>
  

</body>
</html>