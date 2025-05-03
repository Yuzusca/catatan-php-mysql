<?php
$hasil = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'];
    $persen = $_POST['persen'];
    $hasil = ($nilai * $persen) / 100;
    $hasil = number_format($hasil);
}

/* Ini punya Yusuf Hidayat */
?>

<form method="POST">
    <h3>Hitung Persen</h3>
    Nilai: <br>
    <input type="number" name="nilai" required><br>
    Persen (%): <br>
    <input type="number" name="persen" required><br><br>
    <input type="submit" value="Hasil"><br><br>
</form>

<?php
if ($hasil !== "") {
    echo "<strong>Hasil: $hasil</strong>";
}
?>