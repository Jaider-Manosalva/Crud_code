<?php

class Conectar
{

    protected $dbh;

    protected function Conexion()
    {
        try {
            $conectar = $this->dbh = new PDO("mysql:localhost;dbname=crud","root","");
            return $conectar;
        } catch (Exception $e) {
            print "ERROR : ".$e->getMessage()."<br/>";
            die();
        }
    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8mb4'");
    }
}
