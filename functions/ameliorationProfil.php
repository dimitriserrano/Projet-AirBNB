<?php
require_once __DIR__ . '/db.php';

function updateProfil(int $id_utilisateur, string $solde, string $nom, string $prenom, string $photo): bool
{
    $pdo = getPdo();
    $query = "UPDATE utilisateur SET solde = :solde, nom = :nom, prenom = :prenom, photo = :photo WHERE id_utilisateur = :id_utilisateur";
    $stmt = $pdo->prepare($query);
    return $stmt->execute(array(':solde' => $solde, ':nom' => $nom, ':prenom' => $prenom, 'photo' => $photo, ':id_utilisateur' => $id_utilisateur));
}
