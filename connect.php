<?php

// Database configuration
$servername = "localhost"; // Your database server
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "meow"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$nama = $_POST['inputNama'];
$jenis = $_POST['inputJenis'];
$tanggal_lahir = $_POST['tanggal-lahir'];
$domisili = $_POST['domisili'];
$nomor_wa = $_POST['nomor-wa'];
$pertanyaan = $_POST['pertanyaan'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO relawan (nama, jenis_kelamin, tanggal_lahir, domisili, nomor_wa, pertanyaan) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nama, $jenis, $tanggal_lahir, $domisili, $nomor_wa, $pertanyaan);

// Execute statement
if ($stmt->execute()) {
    echo "";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="halaman_utama_style.css">
    <link rel="stylesheet" href="berhasil.css">
    
</head>
<body>
<!--=======================HEADER==============================-->
    <header>
        <nav>
            <h3>Respati Astrid</h3>
            <div>
                <a href="halaman_utama.html">Home</a>
                <a href="halaman_utama.html">Visi & Misi</a>
                <a href="form.html" class="nav-button">Menjadi Relawan</a>
            </div>
        </nav>
    </header>
    <section class="container-berhasil">
        <div>
            <h1>DATA DAN KARTU ANDA BERHASIL DIBUAT</h1>
        </div>
    </section>
    </body>
</html>
