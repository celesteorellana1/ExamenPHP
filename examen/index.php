<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
     //abrir la coneccion a la base datos
     $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
     $conexion = new PDO('mysql:host=localhost;=carnet_0907_23_19496', 'root', 'Umg$2023', $pdo_options);
     //ejecutamos la consulta
     $select = $conexion->query("SELECT codigo, nombre, precio, existencia FROM productos");
    ?> 

    <table border="1" class="tablaexamen">
        <thead>
            <tr>
                <th>codigo</th>
                <th>nombre</th>
                <th>precio</th>
                <th>existencia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($select->fetchAll() as $producto) { ?>
                <tr>
                    <td> <?php echo $producto["codigo"] ?> </td>
                    <td> <?php echo $producto["nombre"] ?> </td>
                    <td> <?php echo $producto["precio"] ?> </td>
                    <td> <?php echo $producto["existencia"] ?> </td>
                </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</body>
</html>