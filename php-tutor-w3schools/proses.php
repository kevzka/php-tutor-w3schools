<!-- proses.php -->
<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Buat SQL query untuk mengambil data nama
$sql = "SELECT Nama FROM smktelkom"; // Ganti smktelkom sesuai tabel Anda
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data setiap baris
    while($row = $result->fetch_assoc()) {
        echo "Nama: " . $row["Nama"] . "<br>";
    }
} else {
    echo "Tidak ada data yang ditemukan";
}

// Tutup koneksi
$conn->close();
?>
