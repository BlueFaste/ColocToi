<!--Noé Leroi-->
<?php



$connexion = new PDO('mysql:host=localhost;dbname=Coloctoi;charset=utf8','root','',array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
));








?>