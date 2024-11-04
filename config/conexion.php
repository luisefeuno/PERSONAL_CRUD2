<?php

class Conectar
{
    protected $dbh;

    protected function Conexion()
    {
        try {
            try {

                $conectar = $this->dbh = new PDO("mysql:host=localhost;port=3306;dbname=crud2", "root", "123");
                return $conectar;
            } catch (PDOException $e) {
                echo "¡Error BD 1!: " . $e->getMessage() . "<br/>";
                die();
            }
        } catch (Exception $e) {
            echo "¡Error BD 2!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}
