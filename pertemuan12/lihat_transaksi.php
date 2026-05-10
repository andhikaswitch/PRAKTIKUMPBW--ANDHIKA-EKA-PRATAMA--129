<?php
    session_start();
    if (!isset($_SESSION['login_Un51k4'])) {
            header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
        exit;
    }
?>

<?php
include 'koneksi_db.php'; // Koneksi database
// Query untuk menampilkan data pesanan beserta nama pelanggan dan total harga
$query = "SELECT Pesanan.ID AS Pesanan_ID, Pelanggan.Nama AS Nama_Pelanggan, Pesanan.Tanggal_Pesanan,Pesanan.Total_Harga FROM Pesanan JOIN Pelanggan ON Pesanan.Pelanggan_ID = Pelanggan.ID";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <title>Daftar Pesanan</title>
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen font-sans">
    <?php include 'nav.php' ?>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Daftar Pesanan</h2>
            
            <!-- Tabel Daftar Pesanan -->
            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            <th class="px-6 py-4">ID Pesanan</th>
                            <th class="px-6 py-4">Nama Pelanggan</th>
                            <th class="px-6 py-4">Tanggal Pesanan</th>
                            <th class="px-6 py-4">Total Harga</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 font-medium"><?= $row['Pesanan_ID'] ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= htmlspecialchars($row['Nama_Pelanggan']) ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= date('d M Y, H:i', strtotime($row['Tanggal_Pesanan'])) ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">Rp <?= number_format($row['Total_Harga'], 2, ',', '.') ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>