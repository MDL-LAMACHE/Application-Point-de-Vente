<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $query = $pdo->query("SELECT * FROM produits");
    echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"));
    $stmt = $pdo->prepare("INSERT INTO ventes (produit_id, quantite, prix_total, date) VALUES (?, ?, ?, ?)");
    $stmt->execute([$data->produit_id, $data->quantite, $data->prix_total, date('Y-m-d H:i:s')]);
}
?>
