<?php
// tambah_locker.php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $kode_locker = 'LCKR' . $_POST['kode_locker']; // Gabungkan prefix dengan input
    
    // Validasi data
    if (empty($_POST['kode_locker'])) {
        header("Location: locker.php?status=error&message=Kode+Locker+tidak+boleh+kosong");
        exit();
    }
    
    // Cek apakah kode locker sudah ada
    $check = $conn->prepare("SELECT id_locker FROM Locker WHERE kode_locker = ?");
    $check->bind_param("s", $kode_locker);
    $check->execute();
    $check->store_result();
    
    if ($check->num_rows > 0) {
        header("Location: locker.php?status=error&message=Kode+Locker+sudah+ada");
        exit();
    }

    // Insert data baru dengan status default 'belum_terisi'
    $stmt = $conn->prepare("INSERT INTO Locker (kode_locker, status) VALUES (?, 'belum_terisi')");
    $stmt->bind_param("s", $kode_locker);
    
    if ($stmt->execute()) {
        header("Location: locker.php?status=success&message=Locker+berhasil+ditambahkan");
    } else {
        header("Location: locker.php?status=error&message=" . urlencode($conn->error));
    }
    
    exit();
} else {
    header("Location: locker.php");
    exit();
}
?>