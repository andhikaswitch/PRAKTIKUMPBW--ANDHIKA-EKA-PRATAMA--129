<?php
echo "<h3>Soal 3: Daftar Hewan</h3>";
?>

<form action="index.php?page=3" method="POST">
    Masukkan nama hewan (pisahkan dengan koma): <br>
    <input type="text" name="daftar_hewan" placeholder="Kucing, Ayam, Ikan" style="width: 300px;" required>
    <button type="submit">Tampilkan List</button>
</form>

<?php
if (isset($_POST['daftar_hewan'])) {
    $input = $_POST['daftar_hewan'];
    // Mengubah string input menjadi array berdasarkan koma
    $hewan = explode(",", $input);

    echo "<ul>";
    foreach ($hewan as $h) {
        echo "<li>" . trim($h) . "</li>";
    }
    echo "</ul>";
}
?>