<?php

//On connecte nos base de données à notre site web grâce à cette fonction
function getPdo(): PDO
{
    try {
       $pdo = new PDO (
           "mysql:host=localhost;dbname=projetweb",
           "airbnb1",
           "M54RjQhx7Z8QyTnj"
       );
       return $pdo;
    } catch (PDOException $ex){
        exit("Erreur lors de la connexion à la base de données");
    }
}
