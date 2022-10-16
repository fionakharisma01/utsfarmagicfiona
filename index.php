<?php

$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "administrasi";

$koneksi = mysqli_connect($hostname, $user, $password, $db_name) or die(mysqli_error($koneksi));

if (isset($_POST['login'])){
  $username = $_POST['user'];
  $password = $_POST['pass'];

  $ambil = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($ambil) === 1){
    $data = mysqli_fetch_assoc($ambil);
    if (password_verify($password, $data['password'])) {
      header("location:Website/index.html");
      exit();
    }else{
      echo "<script> 
      alert('Username atau Password salah');
      window.location = 'index.php';
    </script>";
    }


  }else{
    echo "<script> 
      alert('Username atau Password salah');
      window.location = 'index.php';
    </script>";
  }
}

?>


<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="csslog/style.css" media="screen" type="text/css" />

</head>

<body>
<br><br><br><br><br>
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="" method="POST">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="Login">
  </form>

  <div class="login-help">
    <font>Belum punya akun?</font> <a href="registrasi.php" color="blue"><font color="#4d90fe">Daftar.</font></a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>
