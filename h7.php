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
        function ristkylik(){

        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>