<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Ülesanne3</h1>
    
    <form action="#" method="get">
        <label for="a">külg a</label><br>
        <input type="number" name="a" id="a"><br>
        <label for="b">külg b</label><br>
        <input type="number" name="b" id="b"><br>
        <label for="h">kõrgus h</label><br>
        <input type="number" name="h" id="h"><br>
        <input type="submit" value="Arvuta">
    </form>
    <?php
    if(!empty($_GET)){
        $a = $_GET["a"];
        $b = $_GET["b"];
        $h = $_GET["h"];
        $s = (($a+$b)/2)*$h;
        echo "Trapetsi pindala on ".$s."<br>";
    }
    ?>
    <hr>
    <h2>rombi ümbermõõt</h2>
    <form action="#" method="get">
        <label for="a">Rombi külg</label><br>
        <input type="number" name="a" id="a"><br>
        <input type="submit" value="Arvuta">
    <?php
    if(!empty($_GET)){
        $aa = $_GET["a"];
        $c = $a*4;
        echo "Rombi ümbermõõt on ".$c."<br>";
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>