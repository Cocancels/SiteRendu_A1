<?php

try {
    $database = new PDO(
        'mysql:host=localhost;dbname=formulaire',
        'root',
        '',
    );
} catch(PDOException $e) {
    echo 'Base de données indisponible';
    die;
}

session_start();

?>