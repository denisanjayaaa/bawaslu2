<?php

include "koneksi.php";

$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];

$insert = mysqli_query($mysqli, "INSERT INTO cif SET nama='$nama', jeniskelamin='$jeniskelamin', alamat='$alamat'");

if ($insert) {
    // Data CIF berhasil disimpan
    echo "<script>
            alert('Data CIF berhasil disimpan.');
            window.location.href = 'landingpage.html';
          </script>";
} else {
    // Gagal menyimpan data CIF
    echo "<script>
            alert('Gagal menyimpan data CIF. Silakan coba lagi.');
            window.history.go(-1);
          </script>";
}

?>
