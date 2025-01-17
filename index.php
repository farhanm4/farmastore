<?php 
include "koneksi.php";

$sql = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id = '2'");
$data = mysqli_fetch_object($sql);
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= $data->namaweb ?></title>
       
		 <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/css/sweetalert2.all.min.js"></script>
    </head>
<body style="background-color: black; color: white;">


        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container">
                  <a class="navbar-brand" href="#"><span class="text-light font-weight-bold"><?= $data->namaweb ?></span></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="order.php">Order</a>
                      </li>
                     
                      
                    </ul>
                  </div>
        </div>
    </nav>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikon WhatsApp</title>
    <style>
        .whatsapp-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            text-decoration: none;
        }

        .whatsapp-icon:hover {
            background-color: #20b957;
        }

        .whatsapp-icon img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <!-- Ikon WhatsApp -->
    <a href="https://wa.me/6281401934955" target="_blank" class="whatsapp-icon" title="Hubungi kami di WhatsApp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>
</body>
</html>
</li>
                     
                      
                    </ul>
                  </div>
        </div>
    </nav>

<!-- COROUSEL -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
     <div class="carousel-item active">
      <img src="img/w.jfif" class="d-block w-100" alt="img/1.jpg"  style="width: 100%;max-height:160px;">
    </div>
    <div class="carousel-item">
      <img src="img/1.jpeg" class="d-block w-100" alt="img/1.jpg" style="width: 100%;max-height:160px;">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpeg" class="d-block w-100" alt="img/1.jpg" style="width: 100%;max-height:160px;">
    </div>
    
    
     
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





<div class="container text-center mt-5">
    <h4 class="font-weight-bold">LAYANAN TOP UP GAME</h4>



    <div class="row">


        <div class="col-6 p-3">
            <a href="order.php"><div class="card" style="width: 100%; background-color: lightblue;">
              <img src="img/woi.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">FREE FIRE</h5>
              </div>
            </div></a>
        </div>
        
        <div class="col-6 p-3">
            <a href="order_ml.php"><div class="card" style="width: 100%; background-color: lightblue;">
              <img src="img/ml.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">MOBILE LEGEND</h5>
              </div>
            </div></a>
        </div>
        
          <div class="col-6 p-3">
            <a href="order_pubg.php"><div class="card" style="width: 100%; background-color: lightblue;">
              <img src="img/pubg.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">PUBG MOBILE</h5>
              </div>
            </div></a>
        </div>
        
        
          <div class="col-6 p-3">
            <a href="order_sausage.php"><div class="card" style="width: 100%; background-color: lightblue;">
              <img src="img/s.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">SAUSAGE SMAN</h5>
              </div>
            </div></a>
        </div>


    </div>
</div>


<?php include 'footer.php'; ?>
<script src="dist/js/jquery.slim.min.js"></script>
<script src="dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>