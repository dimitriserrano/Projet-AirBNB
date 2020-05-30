<?php
require_once __DIR__ . './db.php';
require_once './differenceDate.php';

function prixResa($id_utilisateur){
    $pdo = getPdo();
    $query = "SELECT solde FROM utilisateurs WHERE id_utilisateur = :id_utilisateur";
    $stmt = $pdo->prepare($query);

    $stmt->execute(['user_id' => $id_utilisateur]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function coutResa($prix, $id_utilisateur, $solde){
    $pdo = getPdo();
    $cout = $solde - $prix;
    $query = "UPDATE utilisateur SET solde = :solde WHERE id_utilisateur = :id_utilisateur";
    $stmt = $pdo->prepare($query);

    return $stmt->execute([
        'id_utilisateur' => $id_utilisateur,
        'solde' => $solde
    ]);
}

