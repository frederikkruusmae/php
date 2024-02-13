<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>h9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
        echo "<form action='#' method='get'>
        <input type='text' name='nimi' id='nimi' placeholder='nimi' />
        <input type='submit' value='Sisesta' />
        </form>";
    if (isset($_GET['nimi'])){
        echo "Tere, ".ucfirst(strtolower($_GET['nimi']));
    }
        ?>
        <hr>
        <?php
        echo "<form action='#' method='get'>
        <input type='text' name='tekst' id='tekst' placeholder='tekst' />
        <input type='submit' value='Sisesta' />
        </form>";
    if (isset($_GET['tekst'])){
        for ($i = 0; $i < strlen($_GET['tekst']); $i++){
            echo $_GET['tekst'][$i].".";
        }
    }
        ?>
        <hr>
        <?php
        echo "<form action='#' method='get'>
        <input type='text' name='ropp' id='ropp' placeholder='ropenda' />
        <input type='submit' value='Sisesta' />
        </form>";
    if (isset($_GET['ropp'])){
        $ropp = $_GET['ropp'];
        $asendus = array('loll', 'kurat', 'pede' , 'homo' , 'lits');
        $asendatud = str_replace($asendus, '****', $ropp);
        echo $asendatud;
    }
        ?>
        <hr>
        <?php
        echo "<form action='#' method='get'>
        <input type='text' name='nimi' id='nimi' placeholder='nimi' />
        <input type='text' name='perenimi' id='perenimi' placeholder='perenimi' />
        <input type='submit' value='Sisesta' />
        </form>";
    if (isset($_GET['nimi']) && isset($_GET['perenimi'])){
        $eestitahed = array('ä', 'ö', 'ü', 'õ', 'š', 'ž');
        $asendus2 = array('a', 'o', 'u', 'o', 's', 'z');
        $nimi = str_replace($eestitahed, $asendus2, $_GET['nimi']);
        $perenimi = str_replace($eestitahed, $asendus2, $_GET['perenimi']);
        echo $nimi.".".$perenimi."@hkhk.ee";
    }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>