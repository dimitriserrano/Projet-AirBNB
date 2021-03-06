<?php
require_once __DIR__ . '/db.php';

//Cette fonction permettra de pouvoir modifier les informations sur notre compte
function updateProfil(int $id_utilisateur, string $solde, string $nom, string $prenom, string $mail, string $photo): bool
{
    $pdo = getPdo();
    $query = "UPDATE utilisateur SET solde = :solde, nom = :nom, prenom = :prenom, mail = :mail, photo = :photo WHERE id_utilisateur = :id_utilisateur";
    $stmt = $pdo->prepare($query);
    return $stmt->execute(array(':solde' => $solde, ':nom' => $nom, ':prenom' => $prenom, ':mail' => $mail, 'photo' => $photo, ':id_utilisateur' => $id_utilisateur));
}
