<?php  
include "koneksi.php";
$sqlCommand2 = "SELECT * FROM `api` ORDER BY `waktu` DESC LIMIT 1"; 
$query2 = mysqli_query($conn, $sqlCommand2); 
$row1 = mysqli_fetch_row($query2);

$api = $row1[1];
$asap = $row1[2];
$status = $row1[3];
$waktu = $row1[4];
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>RUCIKA - Robot Ngecekin Kebakaran</title>
    <!-- Favicon -->
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>
<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<script>
           setInterval(function() { $(".main-content").load("index.php"); }, 500);
  </script>
<body>

<!-- Sidenav -->
<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-orange pb-8 pt-5 pt-md-8" style="height: 100vh;">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <h1 class="card-title text-uppercase text-muted mb-0" style="font-size: 5em;"><?php echo $status; ?></h1>

                                        <?php 
         // echo $row1[0];
          //  if (@$row1[0] == 1 && @$row2[0] == 1 ) {
          if ($api == 1 && $asap < 340) {
              ?>
              <div class="alert alert-danger" role="alert">
                <span class="h1 font-weight-bold mb-0" style="font-size: 2em;">TERDETEKSI API</span> 
                <audio autoplay class="hidden" loop="true">
                     <source src="alert2.mp3" type="audio/mpeg">
                </audio>
            </div>
             <?php
          }


          else if($api == 0 && $asap > 340){
            ?>
            <div class="alert alert-warning" role="alert">
                <span class="h1 font-weight-bold mb-0" style="font-size: 2em;">TERDETEKSI KEBOCORAN GAS</span> 
            </div>
             <?php
          }

           else if($api == 1 && $asap > 340){
            ?>
            <div class="alert alert-danger" role="alert">
                <span class="h1 font-weight-bold mb-0" style="font-size: 2em;">TERDETEKSI KEBOCORAN GAS & API</span> 
                <audio autoplay class="hidden" loop="true">
                     <source src="alert2.mp3" type="audio/mpeg">
                </audio>
            </div>
             <?php
          }

          else if($api == 0 && $asap < 500){
            ?>
            <div class="alert alert-succes" role="alert">
              <span class="h1 font-weight-bold mb-0" style="font-size: 2em;">- - -</span> 
            </div>
            </div>
             <?php
          }
           ?>
                                       
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success mr-2"> WAKTU </span>
                                    <span class="text-nowrap"><?php echo $waktu;?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-xl-4 col-lg-8 offset-lg-2">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Deteksi Api</h5>
                                        <span class="h2 font-weight-bold mb-0"><?php echo $api;?></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="fas fa-fire"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-nowrap"><?php echo $status;?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8 offset-lg-2 offset-xl-0">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">GAS</h5>
                                        <span class="h2 font-weight-bold mb-0"><?php echo $asap;?> BPM</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                            <i class="fas fa-exclamation"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> WAKTU</span>
                                    <span class="text-nowrap"><?php echo $waktu;?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optional JS -->
<script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="./assets/js/argon.js?v=1.0.0"></script>
</body>
</html>