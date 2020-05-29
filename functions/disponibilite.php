<?php
require_once __DIR__ . '/db.php';

/**
 * @param integer $id_bien
 * @return array
 */

//Cette fonction permettra de pouvoir récupérer les annonces d'un utilisateurs pour pouvoir les afficher sur son profil
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



