<?php
require_once __DIR__ . '/db.php';

function calculPrix(string $lieux, string $dates): float
{
    return $lieux - ($dates * 1.5);
}
