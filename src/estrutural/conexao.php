<?php
# Conexão com o banco de dados estruturada
#http://www.w3schools.com/php/php_mysql_insert.asp

$con = mysqli_connect("localhost", "root", "", "seminarios");

// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

