<?php
require_once '../functions/db.php';
require_once '../views/layout/header.php';

function ajout( $nom, $prenom, $mail, $mdp): bool
{
    $pdo = getPdo();

    $query = "INSERT INTO utilisateur (nom, prenom, mail, mdp) VALUES (:nom, :prenom, :mail, :mdp)";
    $stmt = $pdo->prepare($query);

    return $stmt->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $mail,
        'mdp' => $mdp,
    ]);
}?>
