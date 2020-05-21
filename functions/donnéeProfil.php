<?php

function getProfil(int $id_utilisateur)
{
$pdo = getPdo();
$query = "SELECT * FROM utilisateur WHERE id_utilisateur = :id_utilisateur";
$stmt = $pdo->prepare($query);
$stmt->execute(['id_utilisateur' => $id_utilisateur]);

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
return null;
}

return $row;
}
