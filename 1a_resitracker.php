<?php 
  date_default_timezone_set('Asia/Jakarta');
   //local
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "efstsa";
  
  /* //hostinger
  $servername = "127.0.0.1:3306";
  $username = "u415351248_store";
  $password = "Rahasialabplc11!";
  $dbname = "u415351248_efstsa";
  */

  /*
  DELETE FROM resi_tracker;
  ALTER TABLE resi_tracker AUTO_INCREMENT = 0;
  */

  include 'asset/func.php';
  $globalVar ="gv-";
  $gv_nk = "gvc-"; //nama kurir
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
        {filter($_POST["tb_input_scan"]);}
        db_write();
        ?></h1>
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
      //db_write();
      //db_read();
    }
    function db_read()
    {  
      //bikin kosong"" date time ketika scan_kirim 00:00
      //only read db after success input
      global $servername;
      global $username;
      global $password;
      global $dbname; 
      $conn = new mysqli($servername, $username, $password, $dbname);
          
      $q_command= "SELECT * FROM `resi_tracker` ORDER BY `resi_tracker`.`No` DESC LIMIT 10";
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

    function db_write()
    {
      //kalo bisa scan_time default blank not 00:00
        global $gv_nk;
        global $servername;
        global $username;
        global $password;
        global $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);
        $v_resi =$_POST['tb_input_scan']; //name di form
        $v_kurir = $gv_nk;
        $v_scan_time = date("Y-m-d H:i:s");
        $q_command = "INSERT INTO resi_tracker (Resi,Kurir,Scan_Time) VALUES ('$v_resi','$v_kurir','$v_scan_time')";
        $conn->query($q_command);
        $conn->close();
    }

    function filter($ri){ //ri=resi input
      //alert / disable when input kosong, double, 
      /*
      SELECT COUNT(*) AS count
      FROM resi_tracker
      WHERE Resi = 'JX5196095628' //resi val

      -- If count = 0, proceed with the insertion
      INSERT INTO 
      if count > 0, alert
      */
      global $gv_nk; //nama kurir
      //global $gv_ak; //audio kurir
      $ik=""; //id kurir
      $nk=""; //nama kurir
      $wk=""; //warna kurir
      $ak="asset/mp3/notif_1.mp3"; //audio kurir
      if (strlen($ri)==12 && substr($ri,0,2)=="TG"){$nk="T-JNE"; $wk="";$ak="";}
      elseif(strlen($ri)==12 && substr($ri,0,2)=="JX"){$nk="T-JNT";$wk="";$ak="";}
      elseif(strlen($ri)==13 && substr($ri,0,2)=="TK"){$nk="T-JNE";$wk="";$ak="";}
      elseif(strlen($ri)==16 && substr($ri,0,4)=="TSLP"){$nk="T-LYN";$wk="";$ak="";}
      elseif(strlen($ri)==16 && substr($ri,0,4)=="NJVT"){$nk="T-NNJ";$wk="";$ak="";}
      elseif(strlen($ri)==13 && substr($ri,0,4)=="TSWH"){$nk="T-WHN";$wk="";$ak="";}
      elseif(strlen($ri)==10 && substr($ri,0,2)=="56"){$nk="T-SCP";$wk="";$ak="";}
      elseif(strlen($ri)==10 && substr($ri,0,2)=="44"){$nk="S-SCP";$wk="";$ak="";}
      elseif(strlen($ri)==13 && substr($ri,0,2)=="CM"){$nk="S-JNE";$wk="";$ak="";}
      elseif(strlen($ri)==13 && substr($ri,0,3)=="SHP"){$nk="S-NNJ";$wk="";$ak="";}
      elseif(strlen($ri)==14 && substr($ri,0,2)=="11"){$nk="S-AAJ";$wk="";$ak="";}
      elseif(strlen($ri)==14 && substr($ri,0,2)=="25"){$nk="S-INS";$wk="";$ak="asset/mp3/kurir_instant.mp3";}
      elseif(strlen($ri)==17 && substr($ri,0,3)=="SPX"){$nk="S-SPX";$wk="";$ak="";}
      elseif(strlen($ri)==20 && substr($ri,0,4)=="SHPE"){$nk="S-POS";$wk="";$ak="";}
      elseif(strlen($ri)==15 && substr($ri,0,2)=="LX"){$nk="L-LEL";$wk="";$ak="";}
      elseif(strlen($ri)==17 && substr($ri,0,6)=="TTSPOS"){$nk="T-POS";$wk="";$ak="";}
      elseif(strlen($ri)==13 && substr($ri,0,2)=="JY"){$nk="S-JNE";$wk="";$ak="";}
      elseif(strlen($ri)==12 && substr($ri,0,2)=="JZ"){$nk="L-JNT";$wk="";$ak="";}
      elseif(strlen($ri)==15 && substr($ri,0,4)=="JNAP"){$nk="L-JNE";$wk="";$ak="";}
      elseif(strlen($ri)==15 && substr($ri,0,3)=="TAA"){$nk="T-AAJ";$wk="";$ak="";}
      elseif(strlen($ri)==17 && substr($ri,0,5)=="TKJNT"){$nk="T-JNT";$wk="";$ak="";}
      elseif(strlen($ri)==17 && substr($ri,0,4)=="TKSC"){$nk="T-SCP";$wk="";$ak="";}
      elseif(strlen($ri)==20 && substr($ri,0,6)=="TIKITT"){$nk="T-TKI";$wk="";$ak="";}
      elseif(strlen($ri)==16 && substr($ri,0,4)=="NLID"){$nk="L-NNJ";$wk="";$ak="";}
      elseif(strlen($ri)==13 && substr($ri,0,2)=="JT"){$nk="T-JNT";$wk="";$ak="";}
      else{$nk="X";$ak="asset/a1.mp3";}
      //echo "<h1 style='color: blue'>{$hsl}</h1>";
      echo $nk;
      $gv_nk=$nk;
      if ($ak==""){$ak="asset/mp3/notif_1.mp3";}
      echo "<audio autoplay><source src={$ak} type='audio/mp3'></audio>";
       
      //echo "<h1 id="demo" style="color: blue">LAZADA</h1>"
      //echo $hsl;
      //<h1 style="color: blue">LAZADA</h1>
      //echo '<script type="text/javascript">playSound();</script>';
      //echo '<script type="text/javascript">play_sound();</script>';
      //print("<script>alert('resi tidak terdefinisi');</script>");
    }
    
    function audio_notf($a_url)
    {
        //$a_url = "asset/bell.mp3";
        echo "<audio autoplay><source src={$a_url} type='audio/mp3'></audio>";
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
