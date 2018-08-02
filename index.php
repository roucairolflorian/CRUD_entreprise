<?php
//------ connexion bdd
    $pdo = new PDO('mysql:host=localhost;dbnam=entreprise', 'root', '', array
        (PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT => 'SET NAMES utf8'));

    //------------ session
    session_start();

    //--------- VARIABLES
    $content = '';
    $error = '';
?>
