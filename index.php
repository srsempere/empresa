<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos</title>
</head>
<body>
    <?php

    $pdo = new PDO('pgsql:host=localhost;dbname=empresa', 'empresa', 'empresa');

    $sent = $pdo->query('SELECT * FROM departamentos');

    ?>

    <div></div>
        <table style="margin: auto" border="1">
            <thead>
                <th>Código</th>
                <th>Denominación</th>
            </thead>
            <tbody>
                <?php foreach ($sent as $fila): ?>
                    <tr>
                        <td><?= $fila['codigo'] ?></td>
                        <td><?= $fila['denominacion'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
</body>
</html>
