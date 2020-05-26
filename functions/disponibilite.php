<?php
require_once __DIR__ . '/db.php';

/**
 * @param integer $id_bien
 * @return array
 */
function getDisponibilite(int $id_utilisateur)
{
    $pdo = getPdo();
    $query = "SELECT * FROM annonce WHERE id_utilisateur = :id_utilisateur";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        'id_utilisateur' => $id_utilisateur
    ]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getDisponibilites()
{
    $pdo = getPdo();
    $query = "SELECT * FROM annonce";
    $stmt = $pdo->query($query);

     return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
