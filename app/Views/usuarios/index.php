<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>

<?php if (isset($_GET["m"])) { ?>

    <h3 style="#5f5;"><?= $_GET["m"]; ?> </h3>

<?php } ?>
<a href="<?php base_url(); ?>/usuario/create">Nuevo usuario</a>
<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Contraseña</th>
        <th>Correo</th>
        <th>Estado</th>
        <th>Ciudad</th>
        <th>Direccion</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['nombre'] ?></td>
            <td><?= $usuario['apellido'] ?></td>
            <td><?= $usuario['telefono'] ?></td>
            <td><?= $usuario['contrasena'] ?></td>
            <td><?= $usuario['correo'] ?></td>
            <td><?= $usuario['estado'] ?></td>
            <td><?= $usuario['ciudad'] ?></td>
            <td><?= $usuario['direccion'] ?></td>
            <td>
                <a href="<?php base_url(); ?>/usuario/show/<?= $usuario["id"]; ?>">Ver</a>
                <a href="<?php base_url(); ?>/usuario/edit/<?= $usuario["id"]; ?>">editar</a>
                <a href="<?php base_url(); ?>/usuario/delete/<?= $usuario["id"]; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>