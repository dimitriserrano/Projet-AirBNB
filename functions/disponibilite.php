<?php
require_once __DIR__ . '/db.php';

/**
 * @param string $dispo
 * @param string|null $search
 * @return array
 * @var string $dispo "all"|"dispo"|"not_dispo"
 * @return void
 */

function getDisponibilites(string $dispo, ?string $search = null): array
{
    $pdo = getPdo();
    $query = "SELECT * FROM bien_immobilier";

    if ($dispo == "dispo") {
        $query .= " WHERE dispo = 1";
    }

    if ($dispo == "not_dispo") {
        $query .= " WHERE dispo = 0";
    }

    if ($search !== null) {
        $query = $query . "AND bien LIKE : search";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['search' => "%$search%"]);
    } else {
        $stmt = $pdo->query($query);
    }

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param integer $id_bien
 * @return array
 */
function getDisponibilite(int $id_bien): ?array
{
    $pdo = getPdo();
    $query = "SELECT * FROM bien_immobilier WHERE id_bien = :id_bien";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id_bien' => $id_bien]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        return null;
    }

    return $row;
}
