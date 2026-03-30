<?php
$npm        = "";
$nama       = "";
$prodi      = "";
$semester   = "";
$biaya_ukt  = "";
$diskon     = 0;
$yang_dibayar = 0;

if (!empty($_POST["npm"])) {
    $npm        = $_POST["npm"];
    $nama       = $_POST["nama"];
    $prodi      = $_POST["prodi"];
    $semester   = $_POST["semester"];
    $biaya_ukt  = $_POST["biaya_ukt"];

    if ($biaya_ukt >= 5000000 && $semester > 8) {
        $diskon = 15;
    } elseif ($biaya_ukt >= 5000000) {
        $diskon = 10;
    }

    $potongan     = $biaya_ukt * ($diskon / 100);
    $yang_dibayar = $biaya_ukt - $potongan;
}
?>

<?php if (!empty($_POST["npm"])): ?>
    NPM : <?php echo $npm; ?><br>
    NAMA : <?php echo $nama; ?><br>
    PRODI : <?php echo $prodi; ?><br>
    SEMESTER : <?php echo $semester; ?><br>
    BIAYA UKT : Rp. <?php echo number_format($biaya_ukt, 0, ',', '.'); ?>,-<br>
    DISKON : <?php echo $diskon; ?>% (otomatis ditentukan oleh if)<br>
    YANG HARUS DIBAYAR : Rp. <?php echo number_format($yang_dibayar, 0, ',', '.'); ?>,- (otomatis ditentukan oleh if)<br>
<?php endif; ?>