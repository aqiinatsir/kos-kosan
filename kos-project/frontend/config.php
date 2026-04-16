<?php
$host = "aws-0-ap-southeast-1.pooler.supabase.com";
$db   = "postgres";
$user = "postgres.yystzwreopnpvjdniaon";
$pass = "password_kamu";
$port = "6543";

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$db;sslmode=require",
        $user,
        $pass
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Koneksi sukses!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
