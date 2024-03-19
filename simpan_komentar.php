<?php
// Koneksi ke database (gunakan informasi koneksi yang telah Anda buat sebelumnya)
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bd';

$koneksi = mysqli_connect($host, $user, $password, $database);
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Tangkap data yang dikirimkan melalui formulir
$nama = $_POST['name'];
$komentar = $_POST['comment'];
$tanggal = date("Y-m-d H:i:s"); // Tanggal saat ini

// Buat query SQL untuk menyimpan data ke dalam tabel komentar
$sql = "INSERT INTO komentar (nama, komentar, tanggal) VALUES ('$nama', '$komentar', '$tanggal')";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
    echo "Komentar berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
