
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hlášky</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="styleindex.css">
</head>
<body>
    
<nav>
    <ul>
      <li><a href="index.php">Přidat novou hlášku</a></li>
      <li><a href="view.php">Hlášky</a></li>
      <li><a href="edit.php">Upravit existující hlášku</a></li>
      <li><a href="delete.php">Smazat existující hlášku</a></li>
    </ul>
  </nav>
    <h1>Hlášky učitelů SPŠE Ječná</h1>

  
    <form method="POST" action="add.php">
    <h2>Přidání nové hlášky</h2>

        <label for="jmeno">Jméno přidávajícího uživatele: </label>
        <input type="text" name="jmeno" id="jmeno" required><br><br>

        <label for="jmenoucitel">Jméno učitele: </label>
        <input type="text" name="jmenoucitel" id="jmenoucitel" required><br><br>

        <label for="predmet">Předmět: </label>
        <input type="text" name="predmet" id="predmet" required><br><br>

        <label for="datum">Datum pronesení hlášky: </label>
        <input type="date" name="datum" id="datum" required><br><br>

        <label for="hlaska">Hláška:</label>
        <textarea name="hlaska" id="hlaska" required></textarea><br>

        <input type="submit" value="Přidat hlášku">
        <br>
    <a href="logout.php">Odhlásit se</a>
    </form>
    <footer>
  <div class="container">
    <p>&copy; 2023 Jan Semerák, Tadeáš Petránek</p>
  </div>
</footer>
</body>
</html>
 