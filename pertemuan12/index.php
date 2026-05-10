<?php
    session_start();
    if (!isset($_SESSION['login_Un51k4'])) {
            header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
        exit;
    }
?>

<?php include 'proses_index.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <title>Daftar Buku</title>
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen font-sans">

    <?php include 'nav.php'; ?>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Daftar Buku</h2>
            
            <!-- Form Pencarian -->
            <form method="get" class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-6 items-end">
                <div class="md:col-span-5">
                    <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Cari Berdasarkan Judul</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" id="judul" name="judul" placeholder="Masukkan judul buku"
                        value="<?php echo htmlspecialchars($search_judul ?? '') ?>">
                </div>
                <div class="md:col-span-4">
                    <label for="tahun_terbit" class="block text-sm font-medium text-gray-700 mb-1">Cari Berdasarkan Tahun Terbit</label>
                    <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors" id="tahun_terbit" name="tahun_terbit"
                        placeholder="Masukkan tahun terbit" value="<?php echo htmlspecialchars($search_tahun ?? '') ?>">
                </div>
                <div class="md:col-span-3 flex space-x-2">
                    <button type="submit" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors">Cari</button>
                    <a href="index.php" class="flex-1 text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg transition-colors">Reset</a>
                </div>
            </form>
        </div>

        <!-- Tabel Daftar Buku -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            <th class="px-6 py-4">ID</th>
                            <th class="px-6 py-4">Judul</th>
                            <th class="px-6 py-4">Penulis</th>
                            <th class="px-6 py-4">Tahun Terbit</th>
                            <th class="px-6 py-4">Harga</th>
                            <th class="px-6 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $row['ID'] ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo htmlspecialchars($row['Judul']) ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo htmlspecialchars($row['Penulis']) ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $row['Tahun_Terbit'] ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">Rp<?php echo number_format($row['Harga'], 2, ',', '.') ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium space-x-2">
                                    <a href="form_edit.php?id=<?php echo $row['ID'] ?>" class="inline-flex items-center px-3 py-1.5 bg-amber-100 text-amber-700 hover:bg-amber-200 rounded-md transition-colors">Edit</a>
                                    <a href="proses_hapus.php?id=<?php echo $row['ID'] ?>" class="inline-flex items-center px-3 py-1.5 bg-red-100 text-red-700 hover:bg-red-200 rounded-md transition-colors" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>