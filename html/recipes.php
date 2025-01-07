<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recipes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/recipes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<a href="menu.php"><i class="fa fa-arrow-left" style="color: black"></i></a>
<div class="recettes">
    <canvas id="recipeChart"></canvas>
    </div>

<?php
include('../backend/config.php');

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    $stmt = $pdo->query('SELECT date, value FROM recipes');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>

<script>
    const data = <?php echo json_encode($data); ?>;
    const labels = data.map(item => item.date);
    const values = data.map(item => item.value);

    const ctx = document.getElementById('recipeChart').getContext('2d');
    const recipeChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Recettes',
                data: values,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>