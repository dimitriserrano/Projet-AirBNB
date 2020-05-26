<?php

function getAnnonce(int $id_bien)
{
    $pdo = getPdo();
    $query = "SELECT * FROM annonce WHERE id_bien = :id_bien";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id_bien' => $id_bien]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        return null;
    }

    return $row;
}
