<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Ventes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <a href="ajouter.php" class="btn btn-primary">Ajouter une vente</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Client</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    require 'config.php';
                    $db = new PDO($dsn, $username, $password);
                    $statement = $db->query('SELECT ventes.id, clients.nom AS client, produits.nom AS produit, ventes.quantite, ventes.prix, ventes.date FROM ventes LEFT JOIN clients ON ventes.client_id = clients.id LEFT JOIN produits ON ventes.produit_id = produits.id ORDER BY ventes.id DESC');
                    while($vente = $statement->fetch()) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($vente['id']) . '</td>';
                        echo '<td>' . htmlspecialchars($vente['client']) . '</td>';
                        echo '<td>' . htmlspecialchars($vente['produit']) . '</td>';
                        echo '<td>' . htmlspecialchars($vente['quantite']) . '</td>';
                        echo '<td>' . htmlspecialchars($vente['prix']) . '</td>';
                        echo '<td>' . htmlspecialchars($vente['date']) . '</td>';
                        echo '<td>';
                        echo '<a href="voir.php?id=' . htmlspecialchars($vente['id']) . '" class="btn btn-primary">Voir</a> ';
                        echo '<a href="modifier.php?id=' . htmlspecialchars($vente['id']) . '" class="btn btn-warning">Modifier</a> ';
                        echo '<a href="supprimer.php?id=' . htmlspecialchars($vente['id']) . '" class="btn btn-danger">Supprimer</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                Database::disconnect();
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>