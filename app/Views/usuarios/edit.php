<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
</head>
<body>

<form action="<?php base_url(); ?>/usuario/update/<?= $usuario["id"]; ?>" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="<?= $usuario['nombre'] ?>">

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="<?= $usuario['apellido'] ?>">

    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="<?= $usuario['telefono'] ?>">

    <label for="contrasena">Contraseña</label>
    <input type="text" name="contrasena" id="contrasena" value="<?= $usuario['contrasena'] ?>">

    <label for="correo">Correo</label>
    <input type="text" name="correo" id="correo" value="<?= $usuario['correo'] ?>">

    <label for="estado">Estado</label>
    <input type="text" name="estado" id="estado" value="<?= $usuario['estado'] ?>">

    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad" value="<?= $usuario['ciudad'] ?>">

    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" value="<?= $usuario['direccion'] ?>">

    <input type="submit" value="Guardar">
</form>
</body>
</html>