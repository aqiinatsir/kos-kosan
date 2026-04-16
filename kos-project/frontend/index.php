<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Kos App</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="navbar">
    <h2>KosApp</h2>
    <div class="menu-toggle">☰</div>
    <div class="nav-links">
        <a href="#">Home</a>
        <a href="#">Daftar Kos</a>
        <a href="#">Tentang</a>
        <a href="#">Kontak</a>
    </div>
</div>

<div class="hero">
    <h1>Cari Kos Nyaman & Murah</h1>
    <input type="text" placeholder="Cari lokasi..." />
</div>

<div class="grid">
<?php
$query = $pdo->query("SELECT * FROM kos");
while($row = $query->fetch()){
?>
<div class="card">
    <img src="<?= $row['gambar'] ?>" width="100%">
    <div style="padding:10px;">
        <h3><?= $row['nama'] ?></h3>
        <p><?= $row['lokasi'] ?></p>
        <p>Rp <?= number_format($row['harga']) ?></p>
        <a href="detail.php?id=<?= $row['id'] ?>">Detail</a>
    </div>
</div>
<?php } ?>
</div>

</body>
</html>
