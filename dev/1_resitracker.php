<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>EFST Resi Track</title>
    
    <link rel="shortcut icon" href="asset/logo.png" />
    <link rel="stylesheet" href="bootstrap-5.3.7/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="asset/style.css" />

  </head>
  <body>
    
    <!--<h1 class="p-1 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3 text-center">Eazyfast Resi Tracker v1</h1>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script> -->
    <div class="container"><!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <!--<a class="navbar-brand" href="#">EFST Super App</a>-->
          <div class="navbar-nav">
            <a class="navbar-brand nav-link" href="index.html">EFST Super App</a>
            <a class="nav-item nav-link" href="#"><b>Resi Tracker</b></a>
          </div>
        </nav>
        <br>
    </div>
    <div class="container"><!--textbox-->
      <div class="row"> <!--text baris input 1-->
        <div class="col">Input Scanner Print</div>
        <div class="col">Input Daftar Cari</div>
        <div class="col">Input Scanner Keluar</div>
      </div>
      <div class="row text-start"> <!--baris input 1-->
        <div class="col">
          <form action="" method="POST" autocomplete="off" name="f1">
          <input type="text" class="form-control border-dark" name="tb_input_scan" placeholder="SPXID057-In Print"></div>
          </form>
          
        <div class="col">
          <form action="" method="POST" autocomplete="off" id="tb2">
        <input type="text" class="form-control border-dark" name="tbi2" placeholder="SPXID057-In Search"></div>
          </form>
        <div class="col">
        <input type="text" class="form-control border-dark" name="tbi3" placeholder="SPXID057-In Send"></div>
      </div> 
      <div class="row"> <!--label outbox 1-->
        <div class="col">Daftar Resi Print</div>
        <div class="col">Daftar Resi Jegal</div>
        <div class="col">Daftar Resi Keluar</div>
      </div>
      <div class="row"><!--baris outbox 1-->
          <div class="col">
          <textarea class="form-control border-dark" id="tbo1" rows="10" value="sum">
            </textarea>
            </div>
          <div class="col">
            <textarea class="form-control border-dark" id="tb5" rows="10"><?php $x = $_POST["tb_input_scan"];
            echo "hello $x \n$x\n$x";?>
            </textarea>
            </div>
          <div class="col">
            <textarea class="form-control border-dark" id="tb6" rows="10"></textarea>
            </div>
      </div>
      <br>
      <div class="row"> <!--label outbox 1-->
        <div class="col">Input Scanner QC</div>
        <div class="col">Input Scanner Pack</div>
        <div class="col">Jumah Resi Tersisa</div>
      </div>
      <div class="row">  <!--baris input 2-->
        <div class="col">
          <input type="email" class="form-control border-dark" id="exampleFormControlInput1" placeholder="SPXID057991669516"></div>
        <div class="col">
          <input type="email" class="form-control border-dark" id="exampleFormControlInput1" placeholder="SPXID057991669516"></div>
        <div class="col">
          <input type="email" class="form-control border-dark" id="exampleFormControlInput1" placeholder="4569" disabled readonly></div>
      </div>  
      <div class="row"> <!--label outbox 1-->
        <div class="col">Daftar Resi QC</div>
        <div class="col">Daftar Resi Pack</div>
        <div class="col">Daftar Tersisa</div>
      </div>
      <div class="row"> <!--baris outbox 2-->
        <div class="col">
          <textarea class="form-control border-dark" id="floatingTextarea2" rows="10"></textarea></div>
        <div class="col">
          <textarea class="form-control border-dark" id="floatingTextarea2" rows="10"></textarea></div>
        <div class="col">
          <textarea class="form-control border-dark" id="floatingTextarea2" rows="10" readonly=""></textarea></div>
      </div>
    </div>
    <div class="container"> <!--button-->
      <br></br>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end"> 
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="exampleModalCenter">Prefix Filter</button>
        <button type="button" class="btn btn-success">Open Database</button>
        <button type="button" class="btn btn-primary">Copy File A1</button></div>
    </div>
    <div class="container text-center"><!--table-->
      <h3 class="text-start text-danger"><Br>Tabel Resi Print</h3> <!--tabel 1-->
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

      <h3 class="text-start text-success"><Br>Tabel Resi Keluar</h3> <!--tabel 2-->
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
                  <th scope="col" class="bg-success text-white">SUM</th>
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

      <h3 class="text-start text-primary"><Br>Tabel Resi Selisih</h3> <!--tabel 3-->
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
                  <th scope="col" class="bg-primary text-white">SUM</th>
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
      <div class="container text-center"><!--laporan-->
        <label for="exampleFormControlTextarea1"></label>  <!--summary-->
        <h3 class="text-start">Summary Copy Laporan A1</h3>
        </label>
        <textarea class="form-control" id="floatingTextarea2" rows="3">
          53	28	75	55	3	-	1	214	4	7	-	1	161	-	6	-	1	609	2596	768	29.6</textarea></div>
    </div>
    <script>//enter detection
        // Optional: Prevent accidental form submission if needed
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("f1");
            form.addEventListener("keypress", function (event) {
                if (event.key === "Enter") {
                    form.submit(); // Submit the form when Enter is pressed
                }
            });
        });
      </script>
      <script src="bootstrap-5.3.7/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>


