<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>h4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Ülesanne4</h1>
    <!-- Ülesanne4
    Frederik Kruusimäe
    01.02.2024 -->
    <form action="#" method="get">
        <label for="a">muutuja 1</label><br>
        <input type="number" name="a" id="a"><br>
        <label for="b">muutuja 2</label><br>
        <input type="number" name="b" id="b"><br>
        <input type="submit" value="Arvuta">
    </form>
    <hr>
    <?php

        // $jagamine = $a / $b

    if(isset($_GET["a"]) && isset($_GET["b"])){
        $a = $_GET["a"];
        $b = $_GET["b"];
        if($b == 0 or empty($_GET["a"]) or empty($_GET["b"])){
            echo "Ei jaga loll";
        }
        else{
        $v = $a / $b;
        echo "Vastus on ".$v."<br>";
    }
}

    ?>
        <form action="#" method="get">
        <label for="c">Sisesta esimese inimese vanus</label><br>
        <input type="number" name="c" id="c"><br>
        <label for="d">sisesta teise inimese vanus</label><br>
        <input type="number" name="d" id="d"><br>
        <input type="submit" value="Sisesta">
    </form>
    
    <?php
    //vanused
    if(!empty($_GET["c"]) && !empty($_GET["d"])){
      $c = $_GET["c"];
      $d = $_GET["d"];
    if($c == $d){
      echo "Nad on sama vanused.";
    }elseif($c > $d){
      echo "esimene inimene on vanem";
    }elseif($c < $d){
      echo "teine inimene on vanem";
    }
    }
    ?>
    <hr>
    <form action="#" method="get">
        <label for="e">Sisesta kylg 1</label><br>
        <input type="number" name="e" id="e"><br>
        <label for="f">sisesta kylg 2</label><br>
        <input type="number" name="f" id="f"><br>
        <input type="submit" value="Sisesta">
    </form>
    <?php
    if(!empty($_GET["e"]) && !empty($_GET["f"])){
      $e = $_GET["e"];
      $f = $_GET["f"];
    if($e == $f) {
      echo "Tegu on ruuduga, sest molemad kyljed on v6rdsed.";
      echo "<img src='img/SquareDefinition.svg.png'>";
    } else {
      echo "Tegu on ristkylikuga, sest kyljed ei ole v6rdsed.";
      echo "<img src='img/1419039.png'>";
    }
    }
    ?>
    <hr>
    <form action="#" method="get">
        <label for="g">sisesta enda synniaasta</label><br>
        <input type="number" name="g" id="g"><br>
        <input type="submit" value="Sisesta">
  </form>
      
      <?php
      if(!empty($_GET["g"])){
        $g = $_GET["g"];

      if(($g % 5) == 0) {
        echo "Sinu sisestatud aasta $g on juubeli aasta.";
      } else {
        echo "Sinu sisestatud aasta $g ei ole juubeli aasta.";
      }
      }  
      ?>
      <hr>
      <form action="#" method="get">
        <label for="h">sisesta enda KT punktide arv</label><br>
        <input type="number" name="h" id="h"><br>
        <input type="submit" value="Sisesta">
    </form>

    <?php
    if(!empty($_GET["h"])){
      $h = $_GET["h"];
    switch(true) {
      case $h >= 10:
        echo "SUPER";
        break;
      case $h >= 5 && $h <= 9:
        echo "TEHTUD";
        break;
      case $h < 5:
        echo "KASIN";
        break;
      default:
        echo "SISESTA OMA PUNKTID!";
      }
    } else {
        echo "SISESTA OMA PUNKTID";
    }
    ?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>