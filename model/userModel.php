<?php
require_once('../config/config.php');
//Incluimos la clase conexion a la base de datos
require_once('../libs/database.php');
// Incluimos la clase usuario
//require_once('../model/datos.php');
class userModel
{
    private $id_users;
    private $username;
    private $token;
    protected $db;
    protected $connection;

    public function setToken($token){
        $this->token = $token;
    }
    public function setId_users($id_users){
        $this-> id_users = $id_users;
    }
    public function setUsername($username ){
        $this-> username  = $username ;
    } 
    
    public function getUsername(){
        return $this-> username ;
    } 
    public function getId_users(){
        return $this-> id_users;
    } 
    public function getToken(){
        return $this-> token ;
    } 


    public function __construct(){
        $this->db           = new Database();
        $this->connection   = $this->db->getConnection();    
    }

    public function Insertar(){
        $sql = "INSERT INTO tb_users (username,token) VALUES (:user,:token)";
        $stm = $this->connection->prepare($sql);
        $stm->bindValue(":user",$this->username);
        $stm->bindValue(":token",$this->token);
        $stm->execute();
        return $stm->fetchAll();
    }
    public function mostrar (){
        $sql = "SELECT * FROM tb_users ";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function mostrarform (){
        $sql = "SELECT * FROM tb_users WHERE id_users = :id ";
        $stm = $this->connection->prepare($sql);
        $stm->bindValue(':id',$this->id_users);
        $stm->execute();
        return $stm->fetchAll();
    }

}