<?php
$koneksi = mysqli_connect("localhost", "root", "", "pendaftaran_siswa");

if ($koneksi) {
    echo "<h1>✅ AMAN BOS! KONEKSI LANCAR.</h1>";
} else {
    echo "<h1>❌ GAGAL: " . mysqli_connect_error() . "</h1>";
}
?>