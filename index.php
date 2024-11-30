<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Ventes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .header, .footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
        }
        .main-content {
            padding: 20px;
        }
        .product-list, .cart {
            height: 400px;
            overflow-y: auto;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row header">
        <div class="col-md-12">
            <h1>Gestion des Ventes</h1>
        </div>
    </div>
    <div class="row main-content">
        <div class="col-md-8 product-list">
            <h2>Produits</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamically populate products here -->
                    <tr>
                        <td>1</td>
                        <td>Produit A</td>
                        <td>10.00 €</td>
                        <td><button class="btn btn-primary">Ajouter</button></td>
                    </tr>
                    <!-- Repeat for other products -->
                </tbody>
            </table>
        </div>
        <div class="col-md-4 cart">
            <h2>Panier</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamically populate cart items here -->
                    <tr>
                        <td>Produit A</td>
                        <td>1</td>
                        <td>10.00 €</td>
                        <td><button class="btn btn-danger">Retirer</button></td>
                    </tr>
                    <!-- Repeat for other cart items -->
                </tbody>
            </table>
            <div class="text-end">
                <h3>Total: 10.00 €</h3>
                <button class="btn btn-success">Valider la Vente</button>
            </div>
        </div>
    </div>
    <div class="row footer">
        <div class="col-md-12">
            <p>&copy; 2024 Lux_</p>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>