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
$variable = $model->mostrarform();
print_r($variable);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <?php foreach ($variable as $key ) { ?>
    
        <input type="text" value="<?= $key['username']?>" >
       <?php     } ?> 
    </form>
</body>
</html>