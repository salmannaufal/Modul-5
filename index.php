<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location:beranda.php");
}
include ("function.php");
?>

<!DOCTYPE html>
<html>
<head><title>LOGIN</title></head>
<body>
<?php
if(isset($_GET["error"])){
    if($_GET["error"] == "wrong"){
        echo '<h3>Username dan Password salah!</h3>';
    }
}

if(isset($_GET["notif"])){
    if($_GET["notif"] == "Logout"){
        echo '<h3>Berhasi Logout!</h3>';
    }
}

if(isset($_GET["submit"])){
echo do_login($_POST['username'], $_POST['password']);
}
?>

<form method="post">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit" name="submit" value="SIGN IN">
</form>
</body>
</html>