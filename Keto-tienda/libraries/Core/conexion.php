<?php 
class conexion{
    private $conect;

    public function __construct(){
        $conectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
        try{
            $this->conect = new PDO($conectionString, DB_USER, DB_PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "conexion exitosa";
        }catch(PDOException $e){
            $this->conect = 'Error de Conexion';
            echo "Error: " .$e->getMessage();
        }

    }
    public function conect(){
        return $this->conect;
    }
}


?> 