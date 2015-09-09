<?php

class Conexao{
    
    var $servername;
    var $username;
    var $password;
    var $database;
    var $conn;
    
    public function Conexao(){
        
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "seminarios";
        
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }        
    }
    
    public function ExecutaQuery($SQL){
        
        if ($this->conn->query($SQL) === TRUE) {
            $msg = "Registro Incluído!";
        } else {
            $msg = "Error: " . $SQL . "<br>" . $this->conn->error;
        }

        $this->conn->close();
        return $msg;
    }
}

