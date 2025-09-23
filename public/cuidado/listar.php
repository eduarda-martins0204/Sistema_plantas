<a href="/mvc20251/cuidado/formulario">Cadastrar</a>
<table>
    <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Frequência</th>
        <th>Ações</th>
    </tr>
<?php
foreach( $parametro as $c){
    ?>
    <tr>
        <td><?= $c["id"] ?></td>
        <td><?= $c["descricao"] ?></td>
        <td><?= $c["frequencia"] ?></td>
        <td><a href="/mvc20251/cuidado/formularioalterar?id=<?= $c["id"] ?>">Alterar</a></td>
    </tr>
    <?php
}
?>
</table>
