<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke - Classe e Objetos</title>
</head>

<body>
    <?php

    require './Usuario.php';
    $usuario = new Usuario();
    $msg = $usuario->cadastrar();
    echo $msg;

    ?>
</body>

</html>