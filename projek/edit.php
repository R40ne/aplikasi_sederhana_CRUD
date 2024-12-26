<?php
include 'koneksi.php';
$id = $_GET['id'];

$query = "SELECT * FROM mahasiswa WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #1e90ff;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="hidden"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #1e90ff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #104e8b;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #1e90ff;
        }

        .back-link:hover {
            color: #104e8b;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Data Mahasiswa</h2>
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?= $data['nama']; ?>">
            <label>NIM:</label>
            <input type="text" name="nim" value="<?= $data['nim']; ?>">
            <label>Prodi:</label>
            <input type="text" name="prodi" value="<?= $data['prodi']; ?>">
            <label>Jabatan:</label>
            <input type="text" name="jabatan" value="<?= $data['jabatan']; ?>">
            <button type="submit">Simpan Perubahan</button>
        </form>
        <a href="index.php" class="back-link">Kembali ke Daftar Mahasiswa</a>
    </div>
</body>

</html>