<?php 

class Database
{
    private $hostname = "localhost";
    private $database = "designsplug";
    private $username = "root";
    private $password = "";

    public function getHostname(){ return $this->hostname; }
    public function getDbname(){ return $this->database; }
    public function getUsername(){ return $this->username; }
    public function getPassword(){ return $this->password; }

    public function connectDb()
    {
        try {
            $dsn = "mysql:host=".$this->getHostname().";dbname=".$this->getDbname();
            $conn = new PDO($dsn, $this->getUsername(), $this->getPassword());
        } catch (\PDOException $e) {
            header("content-type: application/json");
            echo json_encode(["code"=>001, "msg"=>"Error. ".$e->getmessage()]);
        }
         
        return $conn;

    }

}
