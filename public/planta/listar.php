<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Plantas</title>
</head>
<body>
    <h1>Lista de Plantas</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Científico</th>
                <th>Nome Popular</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $planta): ?>
            <tr>
                <td><?php echo $planta['id']; ?></td>
                <td><?php echo $planta['nome_cientifico']; ?></td>
                <td><?php echo $planta['nome_popular']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
