<?php
class DATABASE{
    private $host = 'localhost';
    private $name = 'root';
    private $dbname = 'articles';
    private $password = '';
    private $conn;
    function getConnection(){
        if($conn){
            return $conn;
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