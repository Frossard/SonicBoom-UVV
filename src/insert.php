<?php
# Incluindo registro no banco de dados

if(isset($_POST["news-email"])){
    
    $nome = addslashes($_POST["news-nome"]);
    $email = addslashes($_POST["news-email"]);

    $SQL = "INSERT INTO newsletter (newsletter_nome, newsletter_email) VALUES ('".$nome."', '".$email."')";

    if (mysqli_query($con, $SQL)) {
        $msg = "Registro Incluído!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($con);
}