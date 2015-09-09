<?php

class NewsletterController{
    
    public function Adicionar($post){
        #Obj Modelo - Preenchendo o objeto no construtor
        $newsletter = new Newsletter($post);
        #Obj Persistencia
        $newsletterdao = new NewsletterDAO();
        #incluindo no banco de dados
        return $newsletterdao->Insert($newsletter);
    }
    
}

