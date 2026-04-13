<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas PHP Navigasi Include</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9; }
        .menu { margin-bottom: 20px; padding: 10px; background-color: #f0f0f0; border-radius: 5px; border: 1px solid #7a173c; }
        .menu a { margin-right: 15px; text-decoration: none; color: #ba1350fb; font-weight: bold; }
        .konten { padding: 15px; border: 1px solid #7a173c; border-radius: 5px; }
    </style>
</head>
<body>

    <h2>Navigasi Tugas PHP</h2>
    
    <div class="menu">
        <a href="index.php?page=1">Soal 1 (Switch)</a>
        <a href="index.php?page=2">Soal 2 (For)</a>
        <a href="index.php?page=3">Soal 3 (Foreach)</a>
        <a href="index.php?page=4">Soal 4 (Ternary)</a>
        <a href="index.php">Clear</a>
    </div>

    <div class="konten">
        <?php
        // Cek apakah ada parameter 'page' di URL
        if (isset($_GET['page'])) {
            $halaman = $_GET['page'];
            
            // Logika include sederhana
            if ($halaman == '1') {
                include 'soal1(switch-case).php';
            } elseif ($halaman == '2') {
                include 'soal2(for).php';
            } elseif ($halaman == '3') {
                include 'soal3(foreach).php';
            } elseif ($halaman == '4') {
                include 'soal4(ternary).php';
            } else {
                echo "Halaman tidak ditemukan.";
            }
        } else {
            // Tampilan awal (default) jika belum ada link yang diklik
            echo "<h3>Selamat Datang!</h3>";
            echo "<p>Silakan klik menu navigasi di atas untuk melihat jawaban dari masing-masing soal.</p>";
        }
        ?>
    </div>

</body>
</html>