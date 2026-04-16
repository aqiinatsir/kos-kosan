<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
include 'config.php';

$count = $pdo->query("SELECT COUNT(*) FROM kos")->fetchColumn();
?>

<h1>Dashboard</h1>
<p>Total Kos: <?= $count ?></p>

<a href="crud.php">Kelola Kos</a>
<a href="logout.php">Logout</a>
