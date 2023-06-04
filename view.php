<!DOCTYPE html>
<html>
<head>
    <title>Hlášky</title>
    <link rel="stylesheet" href="styleview.css">
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
<h2>Prohlížení existujících hlášek</h2>

    <?php

    $conn = mysqli_connect("localhost", "root", "", "projekt");
    if ($conn->connect_error) {
        die("Připojení k databázi selhalo: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM zaznamy";
    $result = $conn->query($sql);

 
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Jméno přidávajícího uživatele</th><th>Jméno učitele</th><th>Předmět</th><th>Datum pronesení hlášky</th><th>Hláška</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["jmeno"] . "</td><td>" . $row["jmenoucitel"] . "</td><td>" . $row["predmet"] . "</td><td>" . $row["datum"] . "</td><td>" . $row["hlaska"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Žádné hlášky nebyly nalezeny.";
    }

    $conn->close();
    ?>
    </form>
    <br><br>
    <a href="logout.php">Odhlásit se</a>
</body>
</html>
