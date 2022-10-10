<?php 

namespace Abad0\BibliotecaDePeliculas\lib;

use Exception;
use PDO;

// Building the Database class structure
class Database 
{
    // Defining the arguments of the database connection
    private string $host;
    private string $userName;
    private string $password;
    private string $charset;
    private string $dbname;

    public function __construct() 
    {
        $this->host = "localhost";
        $this->userName = "root"; 
        $this->password = "";
        $this->charset = "Utf8mb4";
        $this->dbname = "movies";
    }

    public function connect() 
    {
        try 
        {
            $connection = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES
            ];

            $pdo = new PDO($connection, $this->userName, $this->password, $options);
            echo "Successed connection";
            return $pdo;

        }catch(Exception $e) 
        {
            echo $e->getMessage();
        }    
    }
}