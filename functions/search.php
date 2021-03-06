<?php
require_once __DIR__ .'./db.php';

//Cette fonction permettra de pouvoir faire une recherche de bien avec les différentes informations de celui-ci
function getListe (?int $prixmini = null, ?int $prixmaxi = null, ?string $lieux = null, ?string $places = null){
    $pdo = getPdo();
    $query = "SELECT * FROM annonce";
    if ($prixmini !== null && $prixmaxi !== null && $lieux !== null && $places !== null){
        $query .= " WHERE prix BETWEEN :prixmini AND :prixmaxi AND lieux LIKE :lieux AND places>=:places";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
            'prixmini' => $prixmini,
            'prixmaxi' => $prixmaxi,
            'lieux' => $lieux,
            'places' => $places
        ));
    }else {
        $stmt = $pdo->query($query);
    }
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}

//Cette fonction permettra de pouvoir rechercher uniquement une ville
function getLieux(string $lieux){
    $pdo = getPdo();
    $query = "SELECT * FROM annonce WHERE lieux LIKE :lieux";
    $stmt =  $pdo->prepare($query);
    $stmt->execute([
        'lieux' => "%$lieux%",
    ]);
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}

//Cette fonction permettra de pouvoir rechercher uniquement dans une tranche de prix
function getPrix(int $prixmini, int $prixmaxi){
    $pdo = getPdo();
    $query = "SELECT * FROM annonce WHERE prix BETWEEN :prixmini AND :prixmaxi";
    $stmt =  $pdo->prepare($query);
    $stmt->execute([
        'prix' => "%$prix%",
    ]);
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}

//Cette fonction permettra de pouvoir rechercher uniquement par un nombre de personne
function getPlaces(string $places){
    $pdo = getPdo();
    $query = "SELECT * FROM annonce WHERE places LIKE :places";
    $stmt =  $pdo->prepare($query);
    $stmt->execute([
        'places' => "%$places%",
    ]);
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}
