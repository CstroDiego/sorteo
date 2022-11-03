<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= ($usuario) ? $usuario["nombre"] : "Este usuario no existe"; ?></title>
</head>
<body>
<?php
if ($usuario) { ?>

    <h1> <?= $usuario["nombre"] ?> </h1>
    <h2> <?= $usuario["apellido"] ?> </h2>
    <h3> <?= $usuario["telefono"] ?> </h3>
    <h4> <?= $usuario["contrasena"] ?> </h4>
    <h5> <?= $usuario["correo"] ?> </h5>
    <h6> <?= $usuario["estado"] ?> </h6>
    <h7> <?= $usuario["ciudad"] ?> </h7>
    <h8> <?= $usuario["direccion"] ?> </h8>

<?php } else { ?>

    <br>
    <h2>No existe este usuario</h2>
    <a href="<?php base_url(); ?>/usuario/index">volver a la lista</a>

<?php } ?>
</body>
</html>