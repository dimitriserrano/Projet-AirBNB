<?php
require_once __DIR__ . '/db.php';

function insertBien(string $titre, string $lieux,string $dates, string $dispo, string $prix, string $description, string $photo): bool
{
    $pdo=getPdo();
    $query = "INSERT INTO bien_immobilier (titre, lieux, dates, dispo, prix, description, photo) VALUES (:titre, :lieux, :dates, :dispo, :prix, :description, :photo)";
    $stmt = $pdo->prepare($query);
    return $stmt->execute([
        'nom' => $titre,
        'lieux' => $lieux,
        'dates' => $dates,
        'dispo' => $dispo,
        'prix' => $prix,
        'description' => $description,
        'photo' => $photo
    ]);
}
