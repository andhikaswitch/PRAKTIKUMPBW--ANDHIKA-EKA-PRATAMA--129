<!-- Menu Navigasi -->
<nav class="bg-indigo-600 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="index.php" class="text-white text-xl font-bold tracking-tight">Toko Buku Online</a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button type="button" class="text-white hover:text-indigo-200 focus:outline-none" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden sm:flex sm:items-center sm:space-x-4">
                <a href="index.php" class="text-white hover:bg-indigo-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">Daftar Buku</a>
                <a href="tambah_buku.php" class="text-white hover:bg-indigo-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">Tambah Buku</a>
                <a href="transaksi.php" class="text-white hover:bg-indigo-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">Buat Pesanan</a>
                <a href="lihat_transaksi.php" class="text-white hover:bg-indigo-700 px-3 py-2 rounded-md text-sm font-medium transition-colors">Lihat Pesanan</a>
                <a href="logout.php" class="text-indigo-200 hover:text-white bg-indigo-700 hover:bg-indigo-800 px-3 py-2 rounded-md text-sm font-medium transition-colors ml-4">Logout</a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="sm:hidden hidden pb-4 px-2 space-y-1" id="mobile-menu">
        <a href="index.php" class="block text-white hover:bg-indigo-700 px-3 py-2 rounded-md text-base font-medium">Daftar Buku</a>
        <a href="tambah_buku.php" class="block text-white hover:bg-indigo-700 px-3 py-2 rounded-md text-base font-medium">Tambah Buku</a>
        <a href="transaksi.php" class="block text-white hover:bg-indigo-700 px-3 py-2 rounded-md text-base font-medium">Buat Pesanan</a>
        <a href="lihat_transaksi.php" class="block text-white hover:bg-indigo-700 px-3 py-2 rounded-md text-base font-medium">Lihat Pesanan</a>
        <a href="logout.php" class="block text-indigo-200 hover:text-white bg-indigo-700 px-3 py-2 rounded-md text-base font-medium">Logout</a>
    </div>
</nav>