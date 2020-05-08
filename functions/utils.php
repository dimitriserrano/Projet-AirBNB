<?php

/**
 * @param string $location
 * @return void
 */
function redirect(string $location){
    header('Location: ' . $location);
    exit;
}
