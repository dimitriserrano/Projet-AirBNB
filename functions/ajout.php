<?php
require_once '../functions/db.php';

function ajout(int $solde, string $nom, string $prenom, string $mail, string $mdp, string $photo)
{
    $pdo = getPdo();

    $query = "INSERT INTO utilisateur (solde, nom, prenom, mail, mdp, photo) VALUES (:solde :nom, :prenom, :mail, :mdp, :photo)";
    $stmt = $pdo->prepare($query);

    return $stmt->execute(array(
        'solde' => $solde,
        'nom' => $nom,
        'prenom' => $prenom,
        'mail' => $mail,
        'mdp' => password_hash($mdp, PASSWORD_BCRYPT, ['cost' => 12]),
        'photo' => $photo,
    ));
}?>
