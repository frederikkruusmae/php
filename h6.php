<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>h6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo $i;
            if ($i % 10){
                echo ". ";
            } else {
                echo "<br><br>";
            }
        }
        ?>
        <hr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "*";
        }
        ?>
        <hr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<br>*";
        }
        ?>
        <hr>
        <?php
        echo '<form action="#" method="get"> <input type="number" name="ruut" id="ruut"> <input type="submit" value="sisesta"> </form>';
        for ($i = 1; $i <= $_GET['ruut']; $i++) {
            echo "<br>";
            for ($a = 1; $a <= $_GET['ruut']; $a++) {
                echo "* ";
            }
        }
        ?>
        <hr>
        <?php
         for ($i = 10; $i >= 1; $i--) {
            if ($i % 2 == 0) {
                echo "<br>".$i;
            }
        }
        ?>
        <hr>
        <?php
        for ($i = 3; $i <= 100; $i += 3) {
            echo "<br>".$i;
        }
        ?>
        <hr>
        <?php
        $poisid = array("Marko","Peeter","Pihk");
        $tydrukud = array("Keiti","Mari","Anna");
        for ($i = 0; $i < count($poisid); $i++) {
            echo $poisid[$i]." ".$tydrukud[$i]."<br>";
        } 
        ?>
        <hr>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>