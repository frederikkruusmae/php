<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>h10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <menu>
            <a href="h10.php">Avaleht</a> |
            <a href="h10.php?leht=leht1">Leht1</a> |
            <a href="h10.php?leht=leht2">Leht2</a> |
            <a href="h10.php?leht=leht3">Leht3</a> |
        </menu>

        <?php
        if(!empty($_GET['leht'])){
            include($_GET['leht'].'.php');
        } else {
        ?>
        <h2>Avaleht</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem sint aliquid error quos ipsam ducimus! Ipsum ducimus, repudiandae earum dicta quasi iure sed sunt, mollitia recusandae, iste placeat nihil cum?</p>
        <?php
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>