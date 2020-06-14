<?php

class DBController
{
    //database connection properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "mobileworld";

    //connection property
    public $con = null;

    //call connstructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->con->connect_error){
            echo "Fail" . $this->con->connect_error;
        }
    }
    
    //mysqli for closing connection
    protected function closeConnection(){
        if($this->con != null){
            $this->con->close();
            $this->con = null;
        }
    }
}

