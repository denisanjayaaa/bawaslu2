<?php
// Pastikan Anda mengganti informasi database sesuai dengan pengaturan server Anda
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bawaslu";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir
$nama = $_POST['nama'];
// Tambahan: dapatkan data CIF lainnya sesuai kebutuhan

// Menyiapkan pernyataan SQL
$sql = "INSERT INTO cif (nama) VALUES ('$nama')";
// Tambahan: sesuaikan pernyataan SQL dengan kolom-kolom data CIF lainnya

// Menjalankan pernyataan SQL
if ($conn->query($sql) === TRUE) {
    echo "Data CIF berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
