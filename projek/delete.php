<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM mahasiswa WHERE id = $id";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Hapus Data Mahasiswa</title>
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
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
            display: none;
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
    <div class="popup" id="popup">
        <h2 id="popupTitle"></h2>
        <p id="popupMessage"></p>
        <button onclick="redirectToIndex()">Kembali ke Daftar Mahasiswa</button>
    </div>

    <script>
        const popup = document.getElementById('popup');
        const popupTitle = document.getElementById('popupTitle');
        const popupMessage = document.getElementById('popupMessage');

        // Menampilkan pop-up sesuai hasil operasi
        <?php if ($result): ?>
            popupTitle.textContent = 'Data Berhasil Dihapus';
            popupMessage.textContent = 'Data mahasiswa telah berhasil dihapus dari database.';
        <?php else: ?>
            popupTitle.textContent = 'Gagal Menghapus Data';
            popupMessage.textContent = 'Kesalahan: <?= mysqli_error($koneksi); ?>';
            popupMessage.classList.add('error');
        <?php endif; ?>

        popup.style.display = 'block';

        // Fungsi untuk kembali ke halaman utama
        function redirectToIndex() {
            window.location.href = 'index.php';
        }
    </script>
</body>

</html>