<?php
session_start();
include 'config.php';

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}

/* TAMBAH */
if(isset($_POST['tambah'])){
    $stmt = $pdo->prepare("INSERT INTO kos (nama,lokasi,harga,deskripsi,gambar)
    VALUES (?,?,?,?,?)");
    $stmt->execute([
        $_POST['nama'],
        $_POST['lokasi'],
        $_POST['harga'],
        $_POST['deskripsi'],
        $_POST['gambar']
    ]);
}

/* HAPUS */
if(isset($_GET['hapus'])){
    $pdo->prepare("DELETE FROM kos WHERE id=?")->execute([$_GET['hapus']]);
}

/* DATA */
$data = $pdo->query("SELECT * FROM kos");
?>

<h2>Tambah Kos</h2>
<form method="POST">
<input name="nama" placeholder="Nama">
<input name="lokasi" placeholder="Lokasi">
<input name="harga" placeholder="Harga">
<input name="gambar" placeholder="URL Gambar">
<textarea name="deskripsi"></textarea>
<button name="tambah">Tambah</button>
</form>

<h2>Data Kos</h2>
<?php while($d = $data->fetch()){ ?>
<p><?= $d['nama'] ?>
<a href="?hapus=<?= $d['id'] ?>">Hapus</a>
</p>
<?php } ?>
