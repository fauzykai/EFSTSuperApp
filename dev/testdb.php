<!DOCTYPE html>
<html>
<head>
    <title>test page2</title>
</head>

<body>

<h2>test page</h2>
<form  action="" method="POST" autocomplete="off">
    input: <input type="text" name="no"><br><br>
    <!--Angka 2: <input type="text" name="na"><br><br>-->
    <!--<input type="submit" value="act">-->
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "efst1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql="SELECT * FROM table1";
$query=mysqli_query($conn,$sql);
$datax = mysqli_fetch_array($query);
echo "$datax[RESI] <br>";
echo "$datax[QC_BY] <br>";
$conn->close();

define ("T-JNE_LEN","12");
define ("T-JNE_HEAD","TG");
define ("T-JNE_LEFT","2");

//echo $_POST["no"];
filter1($_POST["no"]); //call

function filter1($x){
    $c= "";
    if (strlen($x)==12 && substr($x,0,2)=="TG"){$c="T-JNE";}
    elseif(strlen($x)==12 && substr($x,0,2)=="JX"){$c="T-JNT";}
    elseif(strlen($x)==13 && substr($x,0,2)=="TK"){$c="T-JNE";}
    else
    {
        //print("<script>alert('resi tidak terdefinisi');</script>");
    }
    echo $c;
    echo '<script type="text/javascript">playSound();</script>';
    
    //echo '<script type="text/javascript">play_sound();</script>';
    
}


?>

<script>
        // Optional: Prevent accidental form submission if needed
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("myForm");
            form.addEventListener("keypress", function (event) {
                if (event.key === "Enter") {
                    form.submit(); // Submit the form when Enter is pressed
                }
            });
        });
</script>

<script type="text/javascript">
    function play_sound() {
        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'music/bell.mp3');
        audioElement.setAttribute('autoplay', 'autoplay');
        audioElement.load();
        audioElement.play();
    }
    function playSound(){
    
    var audio = new Audio('http://www.rangde.org/static/bell-ring-01.mp3');
    audio.play();
    }

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


</body>
</html>
