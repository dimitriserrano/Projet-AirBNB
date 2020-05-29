<?php
require_once '../functions/db.php';

// Cette fonction permettra de pouvoir nous inscrire sur notre site web
function ajout(int $solde, string $nom, string $prenom, string $mail, string $mdp, string $photo) : bool
{
    $pdo = getPdo();

    $query = "INSERT INTO utilisateur (solde, nom, prenom, mail, mdp, photo) VALUES (:solde, :nom, :prenom, :mail, :mdp, :photo)";
    $stmt = $pdo->prepare($query);

    return $stmt->execute([
        'solde' => $solde,
        'nom' => $nom,
        'prenom' => $prenom,
        'mail' => $mail,
        'mdp' => password_hash($mdp, PASSWORD_BCRYPT, ['cost' => 12]),
        'photo' => $photo
    ]);
}
