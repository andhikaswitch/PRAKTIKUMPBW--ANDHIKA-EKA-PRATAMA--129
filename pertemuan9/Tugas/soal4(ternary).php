<?php
echo "<h3>Soal 4: Ternary Genap/Ganjil</h3>";
?>

<form action="index.php?page=4" method="POST">
    Input Angka: <input type="number" name="angka" required>
    <button type="submit">Cek</button>
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    $status = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "<p>Angka $angka adalah <b>$status</b></p>";
}
?>