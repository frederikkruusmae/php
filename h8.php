<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>h8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
        echo date('d.m.Y G:i', time());
        echo "<br>";
        echo "<form action='#' method='get'>
            <input type='number' name='aasta' id='aasta' value='aasta' />
            <input type='submit' value='Sisesta' />
            </form>";
        if (isset($_GET['aasta'])){
            echo $_GET['aasta'] - date('Y')." aastat vana";
        }
        ?>
        <hr>
        <?php
        $koolilopp = date_create('2024-06-23');
        $tana = date_create('now');
        $diff = date_diff($tana, $koolilopp);
        echo "kooliaasta lõpuni on veel ".$diff->format('%R%a')." päeva";
        ?>
        <hr>
        <?php
         if (date('n') >= 3 && date('n') <= 5){
            echo "<img src='<img src='Talv.jpg' alt='talv' width='300' height='300'>";
        } else if (date('n') >= 6 && date('n') <= 8){
            echo "<img src='<img src='Suvi.jpg' alt='talv' width='300' height='300'> suvi";
        } else if (date('n') >= 9 && date('n') <= 11){
            echo "<<img src='<img src='Sygis.jpg' alt='talv' width='300' height='300'> talv";
        } else {
            echo "<img src='<img src='Kevad-200x200.jpg' alt='talv' width='300' height='300'> talv";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>