<?php
namespace App\Utility;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class db_connector
{
    private $servername = "k2fqe1if4c7uowsh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $username = "cuvideez29djcg88";
    private $password = "dtl9gm7m0jmmggvm";
    private $dbname = "xg8kwoisx7bi3ym0";
    
    /**
     * getConnection method connecting to the database.
     * @return $connection after executing the mysqli_connect.
     */
    function getConnection()
    {
        $connection = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname, 3306);
        
        if($connection->connect_error)
        {
            echo "Connection Failed " . $connection->connect_error . "<br>";
        }
        else
        {
            return $connection;
        }
    }
}