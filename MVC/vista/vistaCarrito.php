<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Tienda Online</title>
</head>
<body>
    <h1>Esta es mi tienda</h1>
    <table>
        <?php foreach($productos as $producto):?>
        <tr>
            <td><?php echo $producto["id"]?></td>
            <td><?php echo $producto["nombre"]?></td>
            <td><?php echo $producto["precio"]?>€</td>
        </tr>
        <?php endforeach;?>
    </table>
    <form method="get" action="index.php"> 
        <input type="submit" value="Volver Compra">
    </form>
</body>
</html>