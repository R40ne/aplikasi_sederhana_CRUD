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

        input[type="text"] {
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
        <h2>Tambah Data Mahasiswa</h2>
        <form action="proses_tambah.php" method="post">
            <label>Nama:</label>
            <input type="text" name="nama" required>
            <label>NIM:</label>
            <input type="text" name="nim" required>
            <label>Prodi:</label>
            <input type="text" name="prodi" required>
            <label>Jabatan:</label>
            <input type="text" name="jabatan" required>
            <button type="submit">Simpan</button>
        </form>
        <a href="index.php" class="back-link">Kembali ke Daftar Mahasiswa</a>
    </div>
</body>

</html>