<?php 

    class Database{

        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $db = "PL2_prak-1";
        var $connection; 

        function Connect(){
            $this->connection=mysqli_connect($this->host, $this->username, $this->password, $this->db);
            return $this->connection;
        }

    }

?>
