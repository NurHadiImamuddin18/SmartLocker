<?php
// edit_locker.php
include 'config.php';
session_start();

// Cek apakah request metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $id_locker = $_POST['id_locker'];
    $kode_input = $_POST['kode_locker'];
    
    // Validasi input
    if (empty($id_locker) || empty($kode_input)) {
        $_SESSION['error'] = "ID Locker dan Kode Locker tidak boleh kosong";
        header("Location: locker.php");
        exit();
    }

    // Validasi format kode locker (2 digit angka)
    if (!preg_match('/^[0-9]{2}$/', $kode_input)) {
        $_SESSION['error'] = "Kode Locker harus 2 digit angka (contoh: 01, 12)";
        header("Location: locker.php");
        exit();
    }

    // Format kode locker dengan prefix LCKR
    $kode_locker = 'LCKR' . $kode_input;

    try {
        // Cek apakah kode locker sudah ada (selain record yang sedang diedit)
        $check_stmt = $conn->prepare("SELECT id_locker FROM locker WHERE kode_locker = ? AND id_locker != ?");
        $check_stmt->bind_param("si", $kode_locker, $id_locker);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result->num_rows > 0) {
            $_SESSION['error'] = "Kode Locker '".$kode_locker."' sudah digunakan";
            // Tambahkan JavaScript alert sebelum redirect
            echo "<script>
                alert('Kode Locker ".$kode_locker." sudah digunakan! Silakan gunakan kode lain.');
                window.location.href = 'locker.php';
            </script>";
            exit();
        }

        // Update data locker (hanya kode locker, status tetap tidak diubah)
        $update_stmt = $conn->prepare("UPDATE locker SET kode_locker = ? WHERE id_locker = ?");
        $update_stmt->bind_param("si", $kode_locker, $id_locker);
        
        if ($update_stmt->execute()) {
            $_SESSION['success'] = "Data locker berhasil diperbarui";
        } else {
            $_SESSION['error'] = "Gagal memperbarui data locker: " . $conn->error;
        }
        
        header("Location: locker.php");
        exit();

    } catch (Exception $e) {
        $_SESSION['error'] = "Terjadi kesalahan: " . $e->getMessage();
        header("Location: locker.php");
        exit();
    }
} else {
    // Jika bukan metode POST, redirect ke halaman locker
    header("Location: locker.php");
    exit();
}
?>