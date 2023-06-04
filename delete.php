<!DOCTYPE html>
<html>
<head>
    <title>Hlášky</title>
    <link rel="stylesheet" href="styleindex.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

  <h2>Smazání existujících hlášek</h2>
    <form method="POST" action="deletephp.php">

        <label for="id_odstraneni">ID hlášky:</label>
        <input type="number" name="id_odstraneni" id="id_odstraneni" required><br><br>

        <input type="submit" value="Smazat hlášku">
        <br>
        <a href="logout.php">Odhlásit se</a>
    </form>
    
</body>
</html>
 