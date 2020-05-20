<?php
require_once __DIR__ . '/db.php';

function updateBien(int $id_bien, string $lieux,string $dates, string $dispo, string $prix, string $description, string $places, string $photo): bool
{
    $pdo = getPdo();
    $query = "UPDATE bien_immobilier SET lieux = :lieux, dates = :dates, dispo = :dispo WHERE id_bien = :id-bien, prix = :prix, description = :description, places = :places, photo = :photo";
    $stmt = $pdo->prepare($query);
    return $stmt->execute(array('id_bien' => $id_bien, ':lieux' => $lieux, ':dates' => $dates, ':dispo' => $dispo, ':prix' => $prix, ':description' => $description, 'places' => $places, ':photo' => $photo, ':id_bien' => $id_bien));
}
