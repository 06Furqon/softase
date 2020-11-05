<?php
    
    include ("koneksi.php"); //memanggil koneksi.php
    $pengguna = mysqli_query ($conn,"SELECT * FROM pengguna") //menyimpan hasil query kedalam table pengguna
?>


<!DOCTYPE html>
    <head>
         <link rel="stylesheet" href="css/coba.css"> 
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <link rel="icon" href="img/virus1.png">
        <title>Daftar | Covid19</title> 
        <meta name="description" content="">
    </head>
    <body>
        <div class="Tabs container">
            <div class="row formulir">
                <div class="col">
                    <img src="img/login.png" class="image" alt="">
                </div>
                <div class="col isi">
                    <div id="TabMenu">
                        <button onclick="showPanel(0)" class="submit-btn">Daftar</button>
                    </div>
                    </div>
                    <br>
                    <div class="tabPanel">
                            <h2 class="logo">Daftar</h2>
                            <form action="entry.php" class="form" method="post" class="main-form needs-validation" novalidate>
                            <div class="row">
                              <div class="col">
                                 <label for="nama_depan">Nama Depan</label>
                                <input type="text" class="form-control" name="nama_depan" id="nama_belakang" placeholder="First name" required>
                              </div>
                              <div class="col">
                                <label for="nama_belakang">Nama Belakang</label>
                                <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder="Last name" required>
                              </div>
                            </div>
                            <label for="email">&nbsp;Email</label>
                            <input class="form-control"type="email" name="email" id="email" autocomplete="on" required>
                            <div class="form-border">
                            </div>
                            <label for="password">&nbsp;Password</label>
                            <input class="form-control" type="password" name="password" id="password" autocomplete="on" required>
                            <div class="form-border">
                            </div>
                        <button onclick="showPanel(0)" class="submit-btn">Daftar</button>
                        </form>
                    </div>
            </div>
        </div>
        </nav>
    </div>
          <script src="js/tabs.js"></script>
    </body>
</html>