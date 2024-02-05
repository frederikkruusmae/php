<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>h2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h1>Ülesanne2</h1>
    <?php
    /*
    Ülesanne 1
    Frederik Kruusimäe
    01.02.2024
    */
    $arv1 = 10;
    $arv2 = 20;
    //matemaatika
    $liit = $arv1 + $arv2;
    $lah = $arv1 - $arv2;
    $korr = $arv1 * $arv2;
    $jag = $arv1 / $arv2;
    $jaa = $arv1 % $arv2;

    echo "$arv1 + $arv2 = $liit<br>";
    echo "$arv1 - $arv2 = $lah<br>";
    echo "$arv1 * $arv2 = $korr<br>";
    echo "$arv1 / $arv2 = $jag<br>";
    echo "$arv1 % $arv2 = $jaa<br><br>";
    //mm teisendamine
    $mm = 162.556;
    $cm = $mm / 10;
    $m = $mm / 1000;
    printf ("%.2f mm on %.2f cm või %.2f m<br><br>", $mm, $cm, $m);

    //kolmnurk
    $a = 3;
    $b = 4;
    $c = 5;
    $p = $a + $b + $c;
    $s = ($a * $b) / 2;

    printf ("Kolmnurga ümbermõõt on $p ja kolmnurga pindala on $s<br><br>");
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>