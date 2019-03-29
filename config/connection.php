<?php

class Connection{

    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'sisagenda';
    private $con;
    
    public function getConnection(){
        $this->con =  new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->user, $this->password, );
        return $this->con;
    }

    public function closeConnection(){
        mysqli_close($this->con);
    }
}

?>