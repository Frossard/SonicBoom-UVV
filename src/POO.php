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
    
    public function Insert($req){
        
        $nome = addslashes($req["news-nome"]);
        $email = addslashes($req["news-email"]);
        
        $SQL = "INSERT INTO newsletter (newsletter_nome, newsletter_email) VALUES ('".$nome."', '".$email."')";

        if ($this->conn->query($SQL) === TRUE) {
            return "Registro Incluído!";
        } else {
            echo "Error: " . $SQL . "<br>" . $this->conn->error;
        }

        $this->conn->close();
    }
}

