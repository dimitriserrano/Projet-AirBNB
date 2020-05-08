<?php

function getPdo(): PDO
{
    try {
       $pdo = new PDO (
           "mysql:host=localhost;dbname=projetweb",
           "projetweb",
           "D5OZCEHLVQDJ8zCi"
       );
       return $pdo;
    } catch (PDOException $ex){
        exit("Erreur lors de la connexion à la base de données");
    }
}
