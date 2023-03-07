<?php 
require_once('config.php');

class Conexion{

    private $conn;

    public function __construct(){
        $candenaPDO="pgsql:host=".HOST.";port=5432;dbname=".DB_NAME.";";
        $this->conn=new PDO($candenaPDO,DB_USER,DB_PASS);   
        
    }
    public function getcolumns($tabla){
        $consulta="SELECT column_name FROM information_schema.columns WHERE table_schema = 'public' AND table_name   = '".$tabla."' ";
        $resultado=$this->conn->query($consulta);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
    
};
