
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Špatné heslo'); </script>";
    }
  }
  else{
    echo
    "<script> alert('Uživatel není registrován'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Přihlášení</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <h2>Přihlášení</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="usernameemail">Přihlašovací jméno: </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br><br>
      <label for="password">Heslo:  </label>
      <input type="password" name="password" id = "password" required value=""> <br><br>
      <button type="submit" name="submit">Přihlásit</button>
      <br><br>
    <a href="registration.php">Registrace</a>
    </form>
  </body>
</html>