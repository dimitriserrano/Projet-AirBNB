<?php

function getPdo(): PDO
{
    try {
       $pdo = new PDO (
           "mysql:host=localhost;dbname=projet_b1",
           "projet_b1",
           "opVJFGfWfi7MuzNd"
       );
       return $pdo;
    } catch (PDOException $ex){
        exit("Erreur lors de la connexion à la base de données");
    }
}