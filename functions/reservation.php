<?php
require_once __DIR__ .'./db.php';

function getReservation ($id_bien, $id_utilisateur, $prix, $date_debut, $date_fin){
    $pdo = getPdo();
    $query = "INSERT INTO reservation (id_bien, id_utilisateur, prix, date_debut, date_fin) VALUES (:id_bien, :id_utilisateur, :prix, :date_debut, :date_fin)";
    $stmt = $pdo->prepare($query);
    return $stmt->execute([
        'id_bien' => $id_bien,
        'id_utilisateur' => $id_utilisateur,
        'prix' => $prix,
        'date_debut' => $date_debut,
        'date_fin' => $date_fin
    ]);
}
