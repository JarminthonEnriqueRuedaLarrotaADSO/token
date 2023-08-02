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

print_r('hola');

if(isset($_POST['editar'])) {    
    $model->setId_users($_POST['id']);
}  
$model->mostrarform();


print_r($model);