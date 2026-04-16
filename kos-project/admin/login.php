<?php
session_start();
include 'config.php';

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username=?");
    $stmt->execute([$user]);
    $data = $stmt->fetch();

    if($data && password_verify($pass, $data['password'])){
        $_SESSION['admin'] = $data['id'];
        header("Location: dashboard.php");
    } else {
        echo "Login gagal";
    }
}
?>

<form method="POST">
<input name="username" placeholder="Username">
<input name="password" type="password" placeholder="Password">
<button name="login">Login</button>
</form>
