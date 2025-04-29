<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $kode_pegadaian = 'PGD' . $_POST['kode_pegadaian'];
  $lokasi_pegadaian = $_POST['lokasi_pegadaian'];

  if (empty($id) || empty($kode_pegadaian) || empty($lokasi_pegadaian)) {
    echo json_encode([
      'status' => 'error',
      'message' => 'Semua field harus diisi!'
    ]);
    exit;
  }

  try {
    $stmt = $conn->prepare("UPDATE pegadaian SET 
                kode_pegadaian = ?, 
                lokasi_pegadaian = ? 
                WHERE id = ?");
    $stmt->bind_param("ssi", $kode_pegadaian, $lokasi_pegadaian, $id);
    $result = $stmt->execute();

    if ($result) {
      header("Location: pegadaian.php");
      exit;
    } else {
      echo json_encode([
        'status' => 'error',
        'message' => 'Gagal memperbarui data!'
      ]);
    }

    $stmt->close();
  } catch (Exception $e) {
    echo json_encode([
      'status' => 'error',
      'message' => 'Terjadi kesalahan: ' . $e->getMessage()
    ]);
  }
} else {
  echo json_encode([
    'status' => 'error',
    'message' => 'Metode request tidak valid!'
  ]);
}

$conn->close();
?>