<?php
require_once __DIR__ . '/db.php';

// Cette fonction permettra de pouvoir modifier notre annonce
function updateBien(int $id_bien, string $titre, string $lieux, string $prix, string $description, string $places, string $lit, string $photo): bool
{
    $pdo = getPdo();
    $query = "UPDATE annonce SET titre = :titre, lieux = :lieux, prix = :prix, description = :description, places = :places, lit = :lit, photo = :photo WHERE id_bien = :id_bien";
    $stmt = $pdo->prepare($query);
    return $stmt->execute(array(':titre' => $titre, ':lieux' => $lieux, ':prix' => $prix, ':description' => $description, 'places' => $places, ':lit' => $lit, ':photo' => $photo, ':id_bien' => $id_bien));
}
