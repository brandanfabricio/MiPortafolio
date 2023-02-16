<?php

class Conexion
{

    private $host = "localhost";
    private $db_nombre = "general";
    private $user = "root";
    private $pass = "root";
    private $conex;

    public function Conextar(){
        try {
            $this->conex = new PDO("mysql:host=".$this->host.";dbname=".$this->db_nombre,$this->user,$this->pass);
            $this->conex->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        } catch (PDOException $err) {

            echo "Error en la conexion ". $err;
        } 

        return $this->conex;
    }

}
