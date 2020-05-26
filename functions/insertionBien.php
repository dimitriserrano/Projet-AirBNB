<?php
require_once __DIR__ . '/db.php';

function insertBien(int $id_utilisateur, string $titre, string $lieux, string $prix, string $description, string $places, string $lit, string $photo): bool
{
    $pdo=getPdo();
    $query = "INSERT INTO annonce (id_utilisateur, titre, lieux, prix, description, places, lit,  photo) VALUES (:id_utilisateur, :titre, :lieux, :prix, :description, :places, :lit, :photo)";
    $stmt = $pdo->prepare($query);
    echo("jhfnkdj");
    return $stmt->execute([
        'id_utilisateur' => $id_utilisateur,
        'titre' => $titre,
        'lieux' => $lieux,
        'prix' => $prix,
        'description' => $description,
        'places' => $places,
        'lit' => $lit,
        'photo' => $photo
    ]);
}
