<?php
require_once __DIR__ . '/db.php';

function updateBien(int $id_bien, string $lieux,string $dates, string $prix, string $description, string $places, string $lit, string $photo): bool
{
    $pdo = getPdo();
    $query = "UPDATE bien_immobilier SET lieux = :lieux, dates = :dates WHERE id_bien = :id-bien, prix = :prix, description = :description, places = :places, lit = :lit, photo = :photo";
    $stmt = $pdo->prepare($query);
    return $stmt->execute(array('id_bien' => $id_bien, ':lieux' => $lieux, ':dates' => $dates, ':prix' => $prix, ':description' => $description, 'places' => $places, ':lit' => $lit, ':photo' => $photo, ':id_bien' => $id_bien));
}
