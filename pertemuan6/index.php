<?php
    echo "<h1>Perhitungan Total Pembelian (Dengan Array)</h1>";
    echo "<hr>";

    define("PAJAK", 0.1);  

    $Barang = "Keyboard";
    $hargaBarang = [150000];
    $jumlahBeli = 2;
    $totalHargaTanpaPajak = $hargaBarang[0] * $jumlahBeli;
    $pajakRupiah = $totalHargaTanpaPajak * PAJAK; 
    $totalHarga = $totalHargaTanpaPajak + $pajakRupiah;

    echo "Nama barang: " . $Barang . "<br>";
    echo "Harga Satuan: Rp " . number_format($hargaBarang[0], 0, ',', '.') . "<br>";
    echo "Jumlah Beli: " . $jumlahBeli . "<br>";
    echo "Total Harga (Sebelum Pajak): Rp " . number_format($totalHargaTanpaPajak, 0, ',', '.') . "<br>";
    echo "Pajak (10%): Rp " . number_format($pajakRupiah, 0, ',', '.') . "<br>";
    echo "<b>Total Bayar: Rp " . number_format($totalHarga, 0, ',', '.') . "</b><br>";
?>