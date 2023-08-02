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



        if(isset($_POST['envio'])) {
            $token = bin2hex(random_bytes(15));
            $model->setUsername($_POST['User']);
            $model->setToken($token);
        }  
        $model->Insertar();

    print_r($model);

