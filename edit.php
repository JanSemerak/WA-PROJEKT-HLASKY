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

  <h2>Úprava existujících hlášek</h2>
    <form method="POST" action="editphp.php">
 
        <label for="id_uprava">ID hlášky:</label>
        <input type="number" name="id_uprava" id="id_uprava" required><br><br>

        <label for="nove_jmeno">Jméno přidávajícího uživatele:</label>
        <input type="text" name="nove_jmeno" id="nove_jmeno"><br><br>
        
        <label for="nove_jmeno_ucitele">Jméno učitele: </label>
        <input type="text" name="nove_jmeno_ucitele" id="nove_jmeno_ucitele"><br><br>
        
        <label for="novy_predmet">Předmět: </label>
        <input type="text" name="novy_predmet" id="novy_predmet"><br><br>
        
        <label for="nove_datum">Datum pronesení hlášky: </label>
        <input type="date" name="nove_datum" id="nove_datum"><br><br>

        <label for="nova_hlaska">Hláška:</label>
        <textarea name="nova_hlaska" id="nova_hlaska"></textarea><br>

        <input type="submit" value="Upravit hlášku">
        <br>
    <a href="logout.php">Odhlásit se</a>
    </form>
    
</body>
</html>
