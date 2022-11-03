<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Marca</th>
        <th>Precio</th>
        <th>Codigo</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['nombre'] ?></td>
            <td><img src="<?= $producto['imagen'] ?>" alt="" width="70px"></td>
            <td><?= $producto['marca'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['codigo'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
