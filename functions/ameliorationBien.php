<?php
require_once __DIR__ . '/db.php';

function updateBien(int $id_bien, string $lieux, string $prix, string $description, string $places, string $lit, string $photo): bool
{
    $pdo = getPdo();
    $query = "UPDATE annonce SET lieux = :lieux, prix = :prix, description = :description, places = :places, lit = :lit, photo = :photo WHERE id_bien = :id_bien";
    $stmt = $pdo->prepare($query);
    return $stmt->execute(array('id_bien' => $id_bien, ':lieux' => $lieux, ':prix' => $prix, ':description' => $description, 'places' => $places, ':lit' => $lit, ':photo' => $photo, ':id_bien' => $id_bien));
}
