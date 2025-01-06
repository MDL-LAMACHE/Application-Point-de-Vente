<?php
$dsn = 'mysql:host=pixelserver.fr;dbname=gestion_ventes';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
