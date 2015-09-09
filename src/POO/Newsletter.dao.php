<?php

class NewsletterDAO extends Conexao{
    
    public function Insert($newsletter) {

        $SQL = "INSERT INTO newsletter (newsletter_nome, newsletter_email) VALUES ('" . $newsletter->getNome() . "', '" . $newsletter->getEmail() . "')";

        return parent::ExecutaQuery($SQL);
    }

}

