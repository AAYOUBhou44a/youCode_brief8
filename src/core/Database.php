<?php
namespace App\core;

use PDO;
use PDOException;

class Database{
    private $host = 'localhost';
    private $name = 'root';
    private $dbname = 'articles';
    private $password = '';
    private $conn = NULL;
    function getConnection(){
        if($this->conn){
            return $this->conn;
            exit;
        }
        try{
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname;charset=utf8",
                $this->name,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            "Erreur : " . $e->getMessage();
        }
        return $this->conn;
    }
}

?>