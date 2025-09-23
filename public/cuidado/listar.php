<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Cuidados</title>
</head>
<body>
    <h1>Lista de Cuidados</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário ID</th>
                <th>Planta ID</th>
                <th>Tipo de Cuidado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $cuidado): ?>
            <tr>
                <td><?php echo $cuidado['id']; ?></td>
                <td><?php echo $cuidado['usuario_id']; ?></td>
                <td><?php echo $cuidado['planta_id']; ?></td>
                <td><?php echo $cuidado['tipo_cuidado']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
