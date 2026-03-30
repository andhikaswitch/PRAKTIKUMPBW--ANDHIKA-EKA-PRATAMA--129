<?php
$nama = "";
$nilai = "";
$predikat = "";
$status = "";

if (!empty($_POST["nama"])) {
    $nama = $_POST["nama"];
    $nilai = $_POST["nilai"];

    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai >= 75 && $nilai <= 84) {
        $predikat = "B";
    } elseif ($nilai >= 65 && $nilai <= 74) {
        $predikat = "C";
    } elseif ($nilai >= 50 && $nilai <= 64) {
        $predikat = "D";
    } elseif ($nilai >= 0 && $nilai <= 49) {
        $predikat = "E";
    } else {
        $predikat = "Tidak valid";
    }

    if ($predikat == "A" || $predikat == "B" || $predikat == "C") {
        $status = "Lulus";
    } elseif ($predikat == "D" || $predikat == "E") {
        $status = "Tidak Lulus";
    } else {
        $status = "-";
    }
}
?>

<?php if (!empty($_POST["nama"])): ?>
    Nama : <?php echo $nama; ?><br>
    Nilai : <?php echo $nilai; ?><br>
    Predikat : <?php echo $predikat; ?><br>
    Status : <?php echo $status; ?><br>
<?php endif; ?>