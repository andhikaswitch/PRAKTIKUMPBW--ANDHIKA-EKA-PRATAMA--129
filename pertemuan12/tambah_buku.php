<?php
    session_start();
    if (!isset($_SESSION['login_Un51k4'])) {
            header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <title>Tambah Buku</title>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen font-sans">
    
    <?php include 'nav.php'; ?>
    
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Tambah Buku Baru</h2>
            
            <form method="post" action="proses_tambah_buku.php" class="space-y-5">
                <div>
                    <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" id="judul" name="judul" required>
                </div>
                
                <div>
                    <label for="penulis" class="block text-sm font-medium text-gray-700 mb-1">Penulis</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" id="penulis" name="penulis" required>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="tahun_terbit" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit</label>
                        <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" id="tahun_terbit" name="tahun_terbit" required>
                    </div>
                    
                    <div>
                        <label for="harga" class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
                        <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" id="harga" name="harga" step="0.01" required>
                    </div>
                </div>

                <div>
                    <label for="stok" class="block text-sm font-medium text-gray-700 mb-1">Stok</label>
                    <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" id="stok" name="stok" required>
                </div>
                
                <div class="pt-4">
                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 px-4 rounded-lg transition-colors">Tambah Buku</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>