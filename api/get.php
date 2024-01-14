<?php
header('Content-type: application/json');

try {
    $pdo = new PDO('mysql:host=mysql;dbname=pdf_generator', 'root', 'root');
    $retour['success'] = true;
    $retour['message'] = 'Connexion réussie';
} catch (Exception $e) {
    $retour['success'] = false;
    $retour['message'] = 'Connexion impossible'. $e->getMessage();
}

echo json_encode($retour);