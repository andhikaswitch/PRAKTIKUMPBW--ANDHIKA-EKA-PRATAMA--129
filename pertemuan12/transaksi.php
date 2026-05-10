<?php
    session_start();
    if (!isset($_SESSION['login_Un51k4'])) {
            header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
        exit;
    }
?>

<?php
include 'koneksi_db.php';
// Ambil daftar buku dan pelanggan
$buku_result = $conn->query("SELECT ID, Judul FROM buku");
$pelanggan_result = $conn->query("SELECT ID, Nama FROM pelanggan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <title>Buat Pesanan</title>
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen font-sans">
    <?php include 'nav.php'; ?>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Buat Pesanan Baru</h2>
            
            <?php if (isset($_GET['message'])): ?>
                <div class="bg-blue-50 border-l-4 border-blue-500 text-blue-700 p-4 mb-6 rounded-md text-sm">
                    <?= htmlspecialchars($_GET['message']) ?>
                </div>
            <?php endif; ?>

            <form method="post" action="proses_transaksi.php" class="space-y-6">
                <!-- Data Pelanggan -->
                <div>
                    <label for="pelanggan_id" class="block text-sm font-medium text-gray-700 mb-1">Pilih Pelanggan</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors bg-white" name="pelanggan_id" id="pelanggan_id" required>
                        <option value="">-- Pilih Pelanggan --</option>
                        <?php while ($row = $pelanggan_result->fetch_assoc()): ?>
                            <option value="<?= $row['ID'] ?>"><?= htmlspecialchars($row['Nama']) ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="border-t border-gray-100 pt-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Daftar Buku</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="buku_id" class="block text-sm font-medium text-gray-700 mb-1">Pilih Buku</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors bg-white" name="buku[1][id]" id="buku_id" required>
                                <option value="">-- Pilih Buku --</option>
                                <?php while ($row = $buku_result->fetch_assoc()): ?>
                                    <option value="<?= $row['ID'] ?>"><?= htmlspecialchars($row['Judul']) ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        
                        <div>
                            <label for="kuantitas" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Buku</label>
                            <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" id="kuantitas" name="buku[1][kuantitas]" min="1" required>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 px-4 rounded-lg transition-colors">Buat Pesanan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>