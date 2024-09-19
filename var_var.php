<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = "hola";
        $$a = "mundo";
        print "<p>$hola</p>";
        $a = "adios";
        print "<p>$hola</p>";
        $$a = "mundo";
        print "<p>$adios</p>";
    ?>
</body>
</html>