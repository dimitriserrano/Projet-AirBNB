<?php
require_once __DIR__ . '/db.php';

function insertBien(string $titre, string $lieux,string $dates, string $prix, string $description, string $places, string $lit, string $photo): bool
{
    $pdo=getPdo();
    $query = "INSERT INTO bien_immobilier (titre, lieux, dates, prix, description, places, lit,  photo) VALUES (:titre, :lieux, :dates, :prix, :description, :places,  :lit :photo)";
    $stmt = $pdo->prepare($query);
    return $stmt->execute([
        'titre' => $titre,
        'lieux' => $lieux,
        'dates' => $dates,
        'prix' => $prix,
        'description' => $description,
        'places' => $places,
        'lit' => $lit,
        'photo' => $photo
    ]);
}
