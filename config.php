r<?php
$dsn = 'mysql:host=127.0.0.1;dbname=gestion_ventes';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>