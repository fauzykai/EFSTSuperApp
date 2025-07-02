<!DOCTYPE html>
<html>
<head>
    <title>testfunc</title>
</head>
<body>

<h2>test func</h2>
<form method="post" action="">
    <!--textbox-->
    in 1: <input type="text" name="val1"><br><br>
    in 2: <input type="text" name="val2"><br><br>
    in 3: <input type="text" name="val3"><br><br>
    <!--button-->
    <input type="submit" name="b1" value="but 1">
    <input type="submit" name="b2" value="but 2">
    <input type="submit" name="b3" value="but 3">
</form>

<form oninput="x.value=parseInt(a.value)+parseInt(b.value)">
  <input type="range" id="a" value="50">
  +<input type="number" id="b" value="25">
  =<output name="x" for="a b"></output>
</form>

<?php
include 'func.php';

if(isset($_POST['b1'])) {
echo "b1 press";  
    $angka1 = $_POST['val1'];
    $angka2 = $_POST['val2'];
    if (is_numeric($angka1) && is_numeric($angka2)) {
        $hasil = tambah($angka1, $angka2);
        echo "<h3>Hasil: $hasil</h3>";
    } else {
        echo "<p style='color:red;'>Mohon masukkan dua angka yang valid.</p>";
    }
}

if(isset($_POST['b2'])) {
echo "b2 press";
//dbopen();
}

if(isset($_POST['b3'])) {
echo "b3 press";
db_write_scan();
}

function db_write_scan()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "efstsa";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $val =$_POST['dbin'];
    $sql = "INSERT INTO resi_tracker (Resi) VALUES ('$val')";
    $conn->query($sql);
    $conn->close();
}

/*
function dbopen(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "efstsa";
    $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";  
    //echo "xaxaxa";
    $resi =$_POST['angka1'];
    $sql = "INSERT INTO resi_tracker (Resi) VALUES ('$resi')";
    if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
/*

/*function tambah1($a, $b) {
   return $a + $b;
}
*/

//program bawah ini selalu on ketika ada button klik / refresh

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];

    if (is_numeric($angka1) && is_numeric($angka2)) {
        $hasil = tambah($angka1, $angka2);
        echo "<h3>Hasil: $hasil</h3>";
    } else {
        echo "<p style='color:red;'>Mohon masukkan dua angka yang valid.</p>";
    }
}
    */

?>


</body>
</html>
