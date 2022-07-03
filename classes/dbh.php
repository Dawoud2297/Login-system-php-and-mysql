<?php
class Dbh{
    private $username;
    private $host;
    private $password;
    private $dbName;

    protected function connect(){
        try {
            $this->username = "mahmoud";
            $this->host = "localhost";
            $this->password = "#1q2w3e4r5t#";
            $this->dbName = "users";

            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbName",$this->username,$this->password);

            return $conn;

        } catch (\Throwable $e) {
            echo "Error : ".$e->getMessage()."<br/>";
        }
    }
}
?>