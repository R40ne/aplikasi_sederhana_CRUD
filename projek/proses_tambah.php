<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$jabatan = $_POST['jabatan'];

$query = "INSERT INTO `mahasiswa`(`nama`, `nim`, `prodi`, `jabatan`) VALUES ('$nama','$nim','$prodi','$jabatan')";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }

        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            width: 400px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .popup h2 {
            color: #1e90ff;
            margin-bottom: 10px;
        }

        .popup p {
            font-size: 16px;
            color: #333;
        }

        .popup .error {
            color: red;
            font-weight: bold;
        }

        .popup button {
            padding: 10px 20px;
            background-color: #1e90ff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .popup button:hover {
            background-color: #104e8b;
        }
    </style>
</head>

<body>
    <div class="popup">
        <?php if ($result): ?>
            <h2>Data Berhasil Ditambahkan</h2>
            <p>Data mahasiswa telah berhasil ditambahkan ke database.</p>
        <?php else: ?>
            <h2 class="error">Gagal Menambahkan Data</h2>
            <p><?= "Kesalahan: " . mysqli_error($koneksi); ?></p>
        <?php endif; ?>
        <button onclick="redirectToIndex()">Kembali ke Daftar Mahasiswa</button>
    </div>

    <script>
        // Fungsi untuk mengarahkan ke halaman index.php
        function redirectToIndex() {
            window.location.href = 'index.php';
        }
    </script>
</body>

</html>