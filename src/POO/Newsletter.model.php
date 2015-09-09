<?php

class Newsletter{
    
    protected $nome;
    protected $email;
    
    public function Newsletter($post){
        $this->nome = addslashes($post["news-nome"]);
        $this->email = addslashes($post["news-email"]);
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}

