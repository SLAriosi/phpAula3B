<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

<body class="bg-dark">
    <?php
    if (isset($_GET['param'])) {

        $page = explode("/", $_GET['param']);
        $pasta = $page[0] ?? NULL;
        $arquivo = $page[1] ?? NULL;
        $id = $page[2] ?? NULL;

        $page = "$pasta/$arquivo";

        require "header.php";
        if (file_exists("$page.php")) {
            require "$page.php";
        } else {
            require "pages/error.php";
        }
        require "footer.php";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>