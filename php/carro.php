<?php
    session_start();
    $saludo = '';
    if(!isset($_SESSION["usuario"])){
        $saludo = 'Invitado';
    }else{
    $saludo = $_SESSION["usuario"];
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estas en el carro de Compras de: <?php echo $saludo; ?> </h1>
</body>
</html>