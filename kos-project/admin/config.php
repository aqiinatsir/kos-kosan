<?php
$host = "db.yystzwreopnpvjdniaon.supabase.co";
$db   = "postgres";
$user = "postgres";
$pass = "kuronaichi1";
$port = "5432";

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db;", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Error: " . $e->getMessage());
}
?>