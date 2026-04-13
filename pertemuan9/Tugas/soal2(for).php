<?php
echo "<h3>Soal 2: Cetak Bilangan Genap</h3>";
?>

<form action="index.php?page=2" method="POST">
    Cetak genap dari 2 sampai: <input type="number" name="batas" required>
    <button type="submit">Cetak</button>
</form>

<?php
if (isset($_POST['batas'])) {
    $batas = $_POST['batas'];
    echo "Hasil: ";
    for ($i = 2; $i <= $batas; $i += 2) {
        echo $i . " ";
    }
}
?>