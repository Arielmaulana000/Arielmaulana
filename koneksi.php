<?php
// Konfigurasi koneksi ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "username"; // Ganti dengan username database Anda
$password = "password"; // Ganti dengan password database Anda
$database = "bd"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mendapatkan data dari tabel komentar
$sql = "SELECT * FROM komentar";
$result = $conn->query($sql);

// Memeriksa apakah ada data yang berhasil diambil
if ($result->num_rows > 0) {
    // Menampilkan data ke dalam tabel HTML
    echo "<table border='1'>
            <tr>
                <th>Nama</th>
                <th>Komentar</th>
                <th>Tanggal</th>
            </tr>";
    // Output data dari setiap baris
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nama"] . "</td>
                <td>" . $row["komentar"] . "</td>
                <td>" . $row["tanggal"] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada komentar.";
}

// Menutup koneksi
$conn->close();
?>
