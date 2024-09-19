<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variable superglobar $_SERVER</h1>
    <table>
        <thead>
            <tr>
                <th>Variable</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($_SERVER as $key => $value) { ?>
                <tr>
                    <td><?php echo $key; ?></td>
                    <td><?= $value; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>