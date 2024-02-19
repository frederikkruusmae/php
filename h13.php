<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>h13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="minu_fail" id="minu_fail" />
            <input type="submit" value="Sisesta" />
        </form>
        <?php
        if (isset($_FILES['minu_fail'])){
            $failinimi = $_FILES['minu_fail']['name'];
            $faili_tuup = $_FILES['minu_fail']['type'];
            $faili_ajutine_nimi = $_FILES['minu_fail']['tmp_name'];
            $faili_veakood = $_FILES['minu_fail']['error'];
            $lubatud_tuubid = array('image/jpeg', 'image/jpg');
                if (in_array($faili_tuup, $lubatud_tuubid)){
                if ($faili_veakood === 0){
                    $faili_nimi = uniqid('', true).'.'.$failinimi;
                    $faili_sihtkoht = 'pildid/'.$faili_nimi;
                    move_uploaded_file($faili_ajutine_nimi, $faili_sihtkoht);
                    echo "Faili üleslaadimine õnnestus!";
                    echo "<a href='".$faili_sihtkoht."'><img src='".$faili_sihtkoht."' class='img-fluid'/></a>";
                } else {
                    echo "Tekkis viga faili üleslaadimisel!";
                }
            } else {
                echo "Vale failitüüp!";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>