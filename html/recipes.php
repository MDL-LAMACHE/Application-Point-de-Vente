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
<div class="filter-buttons">
    <button onclick="filterData('day')">Jour</button>
    <button onclick="filterData('week')">Semaine</button>
    <button onclick="filterData('month')">Mois</button>
    <button onclick="filterData('year')">Année</button>
</div>
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
    const rawData = <?php echo json_encode($data); ?>;

    function filterData(period) {
        let filteredData;
        const now = new Date();

        switch (period) {
            case 'day':
                filteredData = rawData.filter(item => new Date(item.date) >= new Date(now.setDate(now.getDate() - 1)));
                break;
            case 'week':
                filteredData = rawData.filter(item => new Date(item.date) >= new Date(now.setDate(now.getDate() - 7)));
                break;
            case 'month':
                filteredData = rawData.filter(item => new Date(item.date) >= new Date(now.setMonth(now.getMonth() - 1)));
                break;
            case 'year':
                filteredData = rawData.filter(item => new Date(item.date) >= new Date(now.setFullYear(now.getFullYear() - 1)));
                break;
            default:
                filteredData = rawData;
        }

        updateChart(filteredData);
    }

    function updateChart(data) {
    const labels = data.map(item => item.date);
    const values = data.map(item => item.value);

        recipeChart.data.labels = labels;
        recipeChart.data.datasets[0].data = values;
        recipeChart.update();
    }

    const ctx = document.getElementById('recipeChart').getContext('2d');
    const recipeChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: rawData.map(item => item.date),
            datasets: [{
                label: 'Recettes',
                data: rawData.map(item => item.value),
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