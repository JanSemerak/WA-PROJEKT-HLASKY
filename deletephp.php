<?php

$id = $_POST['id_odstraneni'];


$conn = mysqli_connect("localhost", "root", "", "projekt");
if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
}

$sql = "DELETE FROM zaznamy WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Záznam byl úspěšně odstraněn.";
} else {
    echo "Chyba při odstraňování záznamu: " . $conn->error;
}

$conn->close();
?>