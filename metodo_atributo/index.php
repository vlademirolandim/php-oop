<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke - Metodo e Atributos</title>
</head>

<body>
    <?php

    require './Usuario.php';

    $usuario = new Usuario();
    $msg = $usuario->cadastrar("Cesar", 35, "cesar@celke.com.br");
    echo $msg;

    ?>
</body>

</html>