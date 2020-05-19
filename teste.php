<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Titulo</td>
            <td>Descricao</td>
        </tr>
        <?php 
            include("core/conexao.php");
            $seleciona=mysqli_query($conexao, "select * from empregador");
            while($campo=mysqli_fetch_array($seleciona)){?>
        <tr>
            <td><?=$campo["titulo"]?></td>
            <td><?=$campo["descricao"]?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>