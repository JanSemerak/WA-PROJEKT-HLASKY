<?php

$jmeno = $_POST['jmeno'];
$jmenoucitel = $_POST['jmenoucitel'];
$predmet = $_POST['predmet'];
$datum = $_POST['datum'];
$hlaska = $_POST['hlaska'];


$conn = mysqli_connect("localhost", "root", "", "projekt");
if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
}

$sql = "INSERT INTO zaznamy (jmeno, jmenoucitel, predmet, datum, hlaska) VALUES ('$jmeno', '$jmenoucitel', '$predmet', '$datum', '$hlaska')";
if ($conn->query($sql) === TRUE) {
    echo "Nový záznam byl úspěšně přidán.";
} else {
    echo "Chyba při přidávání záznamu: " . $conn->error;
}

$conn->close();
?>
