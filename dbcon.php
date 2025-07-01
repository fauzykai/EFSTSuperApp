<?php
// Database connection
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

// Insert data
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO your_table (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
*/
$conn->close();

function tulisdb(){
    //echo "xaxaxa";
    $resi =$_POST['tb_input_scan'];
    $sql = "INSERT INTO resi_tracker (Resi) VALUES ('$resi')";
    if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

function test(){
    echo "test1";
}
?>