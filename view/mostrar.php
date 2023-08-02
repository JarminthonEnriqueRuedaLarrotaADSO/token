<?php 
require_once('../config/config.php');
//Incluimos la clase conexion a la base de datos
require_once('../libs/database.php');
// Incluimos la clase usuario
require_once('../model/userModel.php');
$database = new Database();
//Llamamos el metodo conexion que es quien nos retorna la conexion a la base de datos
$connection = $database->getConnection();
//Creamos la instancia del modelo usuario y pasamos la conexion a la base de datos
$model = new userModel();
$variable = $model->mostrar()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>          
            <tr>
                <th>token</th>
                <th>userName</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($variable as $key ) { ?>        
            <tr>
                <td><?= $key['token']  ?></td>
                <td><?= $key['username']  ?></td>
                <td>
                    <form action="../controller/editarController.php" method="post">
                        <input type="hidden" name="id" value="<?= $key['id_users']?>">
                        <input type="submit" value="editar">
                    </form>
                </td>
            </tr>
        <?php }  ?>
        </tbody>
    </table>
</body>
</html>