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
            <td>
                <button id=<?php echo $producto["id"]?> class="compra">Comprar Putaso</button>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
    <form method="post" action="controladorCarrito.php"> 
        <input type="submit" value="Carrito Compra">
    </form>
    <script src="../js/main.js"></script>
</body>
</html>