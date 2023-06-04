<?php

$id = $_POST['id_uprava'];
$nove_jmeno = $_POST['nove_jmeno'];
$nove_jmeno_ucitele = $_POST['nove_jmeno_ucitele'];
$novy_predmet = $_POST['novy_predmet'];
$nove_datum = $_POST['nove_datum'];
$nova_hlaska = $_POST['nova_hlaska'];


$conn = mysqli_connect("localhost", "root", "", "projekt");
if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
}

$sql = "UPDATE zaznamy SET jmeno='$nove_jmeno', jmenoucitel='$nove_jmeno_ucitele',predmet='$novy_predmet',datum='$nove_datum',hlaska='$nova_hlaska'  WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Záznam byl úspěšně upraven.";
} else {
    echo "Chyba při úpravě záznamu: " . $conn->error;
}

$conn->close();
?>
