<?php
echo "<h3>Soal 1: Cek Jenis Kendaraan</h3>";
?>

<form action="index.php?page=1" method="POST">
    Masukkan Jumlah Roda: <input type="number" name="roda" required>
    <button type="submit">Cek Kendaraan</button>
</form>

<?php
if (isset($_POST['roda'])) {
    $roda = $_POST['roda'];
    echo "<p>Hasil untuk roda $roda: </p>";
    
    switch ($roda) {
        case 2: echo "<b>Motor</b>"; break;
        case 3: echo "<b>Bajaj/Becak</b>"; break;
        case 4: echo "<b>Mobil</b>"; break;
        case 6: echo "<b>Truk Kecil</b>"; break;
        case 8: echo "<b>Truk Besar</b>"; break;
        default: echo "<b>Kendaraan Tidak Dikenal</b>"; break;
    }
}
?>