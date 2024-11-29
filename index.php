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
        <!-- Zone des produits -->
        <div class="col-9" id="produits">
            <!-- Dynamiquement rempli via script.js -->
        </div>
        <!-- Zone de la commande -->
        <div class="col-3" id="commande">
            <h4>Commande</h4>
            <div id="liste-commande"></div>
            <h5>Total : <span id="total">0</span> €</h5>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
