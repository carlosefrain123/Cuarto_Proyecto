<?php
class bd
{
    private $host = 'localhost';
    private $dbname = 'practicd';
    private $username = 'root';
    private $password = '';
    public function Conexion()
    {
        try {
            $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            return $PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
