<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.0/css/all.css">
    <title>Kontrolltoo</title>
  </head>
  <style>
    .jumbo{
    color: #fff;
    background-size: cover;
    max-height: 100%;
   } 
   .banner{
    background: rgb(36,0,26);
    background: radial-gradient(circle, rgba(36,0,26,0) 0%, rgba(172,51,174,1) 100%, rgba(184,55,187,0.4682247899159664) 100%, rgba(0,212,255,1) 100%);
    height: 600px;
    }
    </style>
  <body>
    <div class="container-fluid banner">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">Frederik.com</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="kontrolltoo.php">Avaleht</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontrolltoo.php?leht=kontrolltoo_tooted">Tooted</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="kontrolltoo.php?leht=kontrolltoo_kontakt">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Admin</a>
                    </li>
                    <i class="fa-solid fa-bag-shopping"></i>
                </ul>
          </nav>
          <?php
          if(!empty($_GET['leht'])){
            include($_GET['leht'].'.php');
        } else {
          ?>
        <?php
        }
        ?>

            <div class="row">
                <div class="col-sm-6 mb3 mb-sm-0">
                    <h1>SUPER ALE</h1>
                    <h1>-20% KOIK TOOTED</h1>
                    <p>Kasutasin ilma taustata pilti ja votsin kasutusele BS5!</p>
                    <button type="button" class="btn btn-danger">Vaata pakkumisi <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
                <div class="col-sm-6">
                    <img src="image1.png" class="img-fluid" alt="">
                <div class="jumbo p-5 mb-4 bg-body-tertiary">
                <div class="container-fluid py-5">
                </div>
                </div>
                </div>
            </div>
        

            <div class="text-center">
                <h2>Parimad pakkumised</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
            
            $file=fopen("tooted.csv", "r");
            if ($file !== FALSE) {
                while (($data = fgetcsv($file, 1000, ";")) !== FALSE) {
            // for ($i = 0; $i < 6; $i++) {
                echo '<div class="col">
                <div class="card">
                <img src="' . $data[0] . '" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">' . $data[1] . '</h5>
                    <p class="card-text">' . $data[2] . '€</p>
                </div>
                </div>
            </div>';
                }
            }
            ?>
            
  
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>