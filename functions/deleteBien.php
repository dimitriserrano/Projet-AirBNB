<?php
require_once __DIR__ . '/db.php';
require_once './utils.php';

//Cette fonction permettra de pouvoir supprimer une annonce du site web
function deleteBien(int $id_bien): bool
{
    $pdo = getPdo();
    $query = "DELETE * FROM annonce WHERE id_bien = :id_bien";
    $stmt = $pdo->prepare($query);
    return $stmt->execute([':id_bien' => $id_bien]);
}

$id_bien = $_GET['id'];
deleteBien($id_bien);
redirect('/profil.php');
