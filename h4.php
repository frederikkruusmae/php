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

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>