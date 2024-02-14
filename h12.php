<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>h12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
        echo "<form action='#' method='get'>
        <input type='text' name='start' id='start' placeholder='tunnid' />
        <input type='text' name='lopp' id='lopp' placeholder='minutid' />
        <input type='submit' value='Saada' />
        </form>";

        if (isset($_GET['start']) && isset($_GET['lopp'])) {
            $start = $_GET['start'];
            $lopp = $_GET['lopp'];
            if (is_numeric($start) && is_numeric($lopp)) {
                if ($start >= 0 && $start <= 23 && $lopp >= 0 && $lopp <= 59) {
                    echo "Tund: " . $start . "<br>";
                    echo "Minut: " . $lopp . "<br>";
                } else {
                    echo "Sisestatud andmed ei ole korrektsed!";
                }
            } else {
                echo "Sisestatud andmed ei ole korrektsed!";
            }
        }
        ?>
        <hr>
        <?php
        $csv = fopen('tootajad.csv', 'r');
        $suurimM = 0;
        $suurimN = 0;
        $palkM = array();
        $palkN = array();
        while (($row = fgetcsv($csv, 0, ";")) !== FALSE) {
            if ($row[1] == 'm') {
                array_push($palkM, $row[2]);
            } else {
                array_push($palkN, $row[2]);
            }
        }
        fclose($csv);
        $keskM = array_sum($palkM) / count($palkM);
        $keskN = array_sum($palkN) / count($palkN);
        echo "Tööl on " . count($palkM) . " meest, kelle keskmine palk on " . round($keskM, 2) . " eurot.<br>";
        echo "Tööl on " . count($palkN) . " pesumasinat, kelle keskmine palk on " . round($keskN, 2) . " eurot.<br>";

        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>