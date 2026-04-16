<?php 
include 'config.php';
$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM kos WHERE id=?");
$stmt->execute([$id]);
$kos = $stmt->fetch();
?>

<h1><?= $kos['nama'] ?></h1>
<img src="<?= $kos['gambar'] ?>" width="300">

<p><?= $kos['deskripsi'] ?></p>
<p>Harga: Rp <?= number_format($kos['harga']) ?></p>

<a href="index.php">Kembali</a>
