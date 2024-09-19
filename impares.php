<?php

function oddList(int $start, int $end = 10) : void {
    $start = $start % 2 == 0 ? $start+1 : $start;
    for($i=$start; $i<=$end; $i+=2) {
        //if ($i % 2 !== 0) {
            echo "<li>$i</li>\n";
        //}
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de impares</h1>
    <ul>
        <?php oddList(5,14); ?>
    </ul>
</body>
</html>
