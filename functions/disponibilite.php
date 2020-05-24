<?php
require_once __DIR__ . '/db.php';

/**
 * @param integer $id_bien
 * @return array
 */
function getDisponibilite(int $id_bien)
{
    $pdo = getPdo();
    $query = "SELECT * FROM annonce";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id_bien' => $id_bien]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function getDisponibilites()
{
    $pdo = getPdo();
    $query = "SELECT * FROM annonce";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id_bien' => $id_bien]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
