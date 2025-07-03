<?php 
  date_default_timezone_set('Asia/Jakarta');
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "efstsa";
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  include 'func.php';
  $globalVar ="gv-";
  $gv_kurir = "gvc-";
  
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Scanner Input</title>

    <link rel="shortcut icon" href="asset/logo.png" />
    <link rel="stylesheet" href="bootstrap-5.3.7/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container-fluid text-center">
      <div class="row">
        <h4>Scanner Input</h4>
        TG3522075901 / JX5196095628
        <br>
        <!--
        DELETE FROM resi_tracker;
        ALTER TABLE resi_tracker AUTO_INCREMENT = 0;
        -->
      </div>

      <div class="row">
        <!--input-->
        <form action="" method="POST" autocomplete="off" name="form1">
          <input type="text" class="form-control border-dark" name="tb_input_scan" placeholder="SPXID057-In Print" />
        </form>
      </div>
      <div class="row">
        <!--info kurir-->
        <h1 id="demo" style="color: blue"><?php if ($_SERVER["REQUEST_METHOD"] == "POST") //enter press / refresh
        {filter($_POST["tb_input_scan"]);}?></h1>
      </div>
      <div class="row">
        <!--10 data terakhir-->
        <div class="table-responsive" style="max-height:300px;">
          <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Resi</th>
                  <th>Kurir</th>
                  <th>Waktu Scan</th>
                  <th>Waktu Kirim</th>
                </tr>
              </thead>
                <tbody>
                  <?php
                  if ($_SERVER["REQUEST_METHOD"] == "POST"){db_read();}
                  ?>
                </tbody>
          </table>
        </div>



        <!--
        <textarea class="form-control border-dark" id="tbo1" rows="10" value="sum" placeholder="SPXID057-..."><?php
           //if(isset($_POST['b1'])) {db_read();}
           //if ($_SERVER["REQUEST_METHOD"] == "POST"){db_read();}
           ?>
           </textarea>
        -->
      </div>
      <div class="row"><!--test button-->
        <form method="POST" action="">
        <input type="submit" name="b1" value="btn text">
        </form>
        <div>
        </div>
      </div>
      <div class="row">
        <!--tabel 1-->
        <h3 class="text-start text-danger"><Br />Tabel Resi Print</h3>
        <table class="table table-bordered table-sm">
          <thead>
            <th scope="col">Hitung Print</th>
            <th scope="col">JNE</th>
            <th scope="col">JNT</th>
            <th scope="col">SCP</th>
            <th scope="col">AAJ</th>
            <th scope="col">WHN</th>
            <th scope="col">POS</th>
            <th scope="col">LYN</th>
            <th scope="col">SPX</th>
            <th scope="col">TKI</th>
            <th scope="col">NNJ</th>
            <th scope="col">IDP</th>
            <th scope="col">LEL</th>
            <th scope="col">INS</th>
            <th scope="col">JTC</th>
            <th scope="col">COD</th>
            <th scope="col" class="bg-danger text-white">SUM</th>
          </thead>
          <tbody>
            <tr>
              <td>Jumlah Total</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Tokped</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Shopee</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Lazada</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  <?php
    /*if(isset($_POST['b1'])) {
    echo "b1 press";
    db_read();
    }
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") //enter press / refresh
    {
      //filter($_POST["tb_input_scan"]);
      db_write_scan();
      //db_read();
    }
    function db_read()
    {  
      global $conn;
      $q_command= "SELECT * FROM `resi_tracker` ORDER BY `resi_tracker`.`No` DESC";
      $result = $conn->query($q_command);

      if ($result->num_rows>0){
          while($row = $result->fetch_assoc())
          {
            echo '<tr>
            <td scope="row">'.$row["No"].'</td>
            <td>'.$row["Resi"].'</td>
            <td>'.$row["Kurir"].'</td>
            <td>'.$row["Scan_Time"].'</td>
            <td>'.$row["Send_Time"].'</td>
            </tr>';
            
          /*echo $row ["Resi"]." | " .
          $row["Scan_Time"]. " | ".
          "\n";
          */
          }
        }
        else{echo "0 result";}
        $conn->close();
    }
    
    function audio_notf($a_url)
    {
        //$a_url = "asset/bell.mp3";
        echo "<audio autoplay><source src={$a_url} type='audio/mp3'></audio>";
    }

    function db_write_scan()
    {
      global $gv_kurir;
      //global $conn;
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "efstsa";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $v_resi =$_POST['tb_input_scan']; //name di form
        $v_kurir = $gv_kurir;
        $v_scan_time = date("Y-m-d H:i:s");
        $q_command = "INSERT INTO resi_tracker (Resi,Kurir,Scan_Time) VALUES ('$v_resi','$v_kurir','$v_scan_time')";
        $conn->query($q_command);
        $conn->close();
    }

    function filter($x){
      global $gv_kurir;
      $hsl= "";
      if (strlen($x)==12 && substr($x,0,2)=="TG"){$hsl="T-JNE";}
      elseif(strlen($x)==12 && substr($x,0,2)=="JX"){$hsl="T-JNT";}
      elseif(strlen($x)==13 && substr($x,0,2)=="TK"){$hsl="T-JNE";}
      else{$hsl="X";}
      //echo "<h1 style='color: blue'>{$hsl}</h1>";
      echo $hsl;
      $gv_kurir=$hsl;
       
      //echo "<h1 id="demo" style="color: blue">LAZADA</h1>"
      //echo $hsl;
      //<h1 style="color: blue">LAZADA</h1>
      //echo '<script type="text/javascript">playSound();</script>';
      //echo '<script type="text/javascript">play_sound();</script>';
      //print("<script>alert('resi tidak terdefinisi');</script>");
      }

     function gettime()
    {
      date_default_timezone_set('Asia/Jakarta');
      echo "time=" . date("Y-m-d H:i:s");
      $dateval=date("Y-m-d H:i:s");
      $GLOBALS['dateval'] = $dateval;
      //echo $dateval;
    }

    function display()
    {
      echo $GLOBALS['dateval'];
    }
?>
  </body>
  <script src="bootstrap-5.3.7/dist/js/bootstrap.bundle.js"></script>
  <script>
    function myFunction() {
    document.getElementById("demo").style.fontSize = "25px"; 
    document.getElementById("demo").style.fontSize = "25px"; 
    document.getElementById("demo").style.color = "red";
    document.getElementById("demo").style.backgroundColor = "yellow";   
    }  
    </script>
</html>
