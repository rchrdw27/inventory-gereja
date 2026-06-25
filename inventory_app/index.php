<?php
include 'koneksi.php';

$totalBarang = $conn->query("SELECT COUNT(*) as total FROM items")->fetch_assoc()['total'];
$totalDipinjam = $conn->query("SELECT COUNT(*) as total FROM borrowings WHERE status='dipinjam'")->fetch_assoc()['total'];
$totalRusak = $conn->query("SELECT COUNT(*) as total FROM damages WHERE status='rusak'")->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Inventaris</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        .card { background:white; padding:20px; margin:10px; display:inline-block; }
    </style>
</head>
<body>
    <h1>Dashboard Inventaris</h1>
    <div class="card">Total Barang: <?php echo $totalBarang; ?></div>
    <div class="card">Dipinjam: <?php echo $totalDipinjam; ?></div>
    <div class="card">Rusak: <?php echo $totalRusak; ?></div>
</body>
</html>
