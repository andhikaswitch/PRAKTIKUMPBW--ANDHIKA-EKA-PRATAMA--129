<?php
session_start();
// Menghapus semua data session
session_unset();
// Menghancurkan session
session_destroy();

// Redirect kembali ke halaman login dengan pesan sukses
header("Location: login.php?message=" . urlencode("Anda telah berhasil keluar."));
exit;
?>