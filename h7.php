<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>h7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
        function tervita(){
            return "Tere paiksekesekene!";
        }
        echo tervita();
        ?>
        <hr>
        <?php
        function uudiskiri(){
            echo "<div class='form-group'>
                <label for='exampleInputEmail1'>Liitu uudiskirjaga(Sisesta Email)</label>
                <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Sisesta email'>
                <small id='emailHelp' class='form-text text-muted'> </small>
                <button type='submit' class='btn btn-primary'>Liitu</button></div>";
        }
        echo uudiskiri();
        ?>
        <hr>
        <?php
        function Kasutaja($kasutaja){
            echo strtolower($kasutaja)."@hkhk.edu.ee";
            echo "<br>";
            echo substr(sha1(mt_rand()),5,7);
        }
        Kasutaja("FrEdErIk");
        ?>
        <hr>
        <?php
        function arvud(){
            echo "<form action='#' method='get'>
                <input type='number' name='min' id='min' value='min' placeholder='Min' />
                <input type='number' name='max' id='max' value='max' placeholder='max' />
                <input type='number' name='step' id='step' value='step' placeholder='samm' />
                <input type='submit' value='Sisesta' />
                </form>";
            if (isset($_GET['min']) && isset($_GET['max']) && isset($_GET['step'])){
                for ($i = $_GET['min']; $i <= $_GET['max']; $i+=$_GET['step']) {
                    echo $i." ";
                }
            }
        }
        arvud();
        ?>
        <hr>
        <?php
        function ristkylik($kulg1, $kulg2){
            echo "Ristkyliku pindala on ".$kulg1 * $kulg2;

        }
        echo "<form action='#' method='get'>
                    <input type='number' name='kulg1' id='kulg1' value='kulg1' />
                    <input type='number' name='kulg2' id='kulg2' value='kulg2' />
                    <input type='submit' value='Sisesta' />
                    </form>";
                if (isset($_GET['kulg1']) && isset($_GET['kulg2'])){
                    ristkylik($_GET['kulg1'], $_GET['kulg2']);
                }
        ?>
        <hr>
        <?php
        function isikukood(){
            echo "<form action='#' method='get'>
                    <input type='number' name='isikukood' id='isikukood' value='isikukood' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['isikukood'])){
                if (strlen($_GET['isikukood']) == 11){
                    echo "Isikukood on korrektne";
                } else {
                    echo "Isikukood on vale";
                }
                switch (substr($_GET['isikukood'], 0, 1)){
                    case 1:
                        $aasta = "18";
                        $sugu = "mees";
                        break;
                    case 2:
                        $aasta = "18";
                        $sugu = "naine";
                        break;
                    case 3:
                        $aasta = "19";
                        $sugu = "mees";
                        break;
                    case 4:
                        $aasta = "19";
                        $sugu = "naine";
                        break;
                    case 5:
                        $aasta = "20";
                        $sugu = "mees";
                        break;
                    case 6:
                        $aasta = "20";
                        $sugu = "naine";
                        break;
                        default:
                            echo "Vale isikukood";
                            break;
                 }
                    echo "<br> Sugu: ".$sugu;
                    echo "<br> Sünd: ".$aasta.substr($_GET['isikukood'], 1, 2);
                }
        }
            isikukood();
            ?>
            <hr>
            <?php
            function motted(){
                $alus = array("Albert", "Mauno", "Madis");
                $oeldis = array("on", "ei ole", "täiega");
                $sihitis = array("pede", "suur", "karvane");
                echo $alus[rand(0,2)]." ".$oeldis[rand(0,2)]." ".$sihitis[rand(0,2)];
            }
            motted();
            ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>