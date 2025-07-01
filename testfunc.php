<!DOCTYPE html>
<html>
<head>
    <title>Penjumlahan Dua Angka</title>
</head>
<body>

<h2>Form Penjumlahan</h2>
<form method="post" action="">
    Angka 1: <input type="text" name="angka1"><br><br>
    Angka 2: <input type="text" name="angka2"><br><br>
    <input type="submit" name="submit" value="Jumlahkan">
</form>

<?php
include 'func.php';

//function tambah1($a, $b) {
//    return $a + $b;
//}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];

    if (is_numeric($angka1) && is_numeric($angka2)) {
        $hasil = tambah($angka1, $angka2);
        echo "<h3>Hasil: $hasil</h3>";
    } else {
        echo "<p style='color:red;'>Mohon masukkan dua angka yang valid.</p>";
    }
}
?>

</body>
</html>
