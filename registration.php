
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Přihlašovací jméno nebo email jsou již zabrané'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO users VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Úspěšná registrace'); </script>";
    }
    else{
      echo
      "<script> alert('Hesla se neshodují'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrace</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <h2>Registrace</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="name">Jméno: </label>
      <input type="text" name="name" id = "name" required value=""> <br><br>
      <label for="username">Přihlašovací jméno: </label>
      <input type="text" name="username" id = "username" required value=""> <br><br>
      <label for="email">Email: </label>
      <input type="email" name="email" id = "email" required value=""> <br><br>
      <label for="password">Heslo: </label>
      <input type="password" name="password" id = "password" required value=""> <br><br>
      <label for="confirmpassword">Heslo znovu: </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br><br>
      <button type="submit" name="submit">Registrovat</button>
      <br><br>
      <a href="login.php">Přihlášení</a>
    </form>
  </body>
</html>