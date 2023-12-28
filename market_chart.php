<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php-login-google";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM marketdata";
$result = $conn->query($sql);


$labels = [];
$openingPrices = [];
$closingPrices = [];

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['id'];
    $openingPrices[] = ($row['opening_Price']); 
    $closingPrices[] = ($row['closing_Price']); 
}


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Market Data Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<canvas id="marketChart" width="400" height="200"></canvas>

<script>
var ctx = document.getElementById('marketChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
            label: 'Opening Price',
            data: <?php echo json_encode($openingPrices); ?>,
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            fill: false
        }, {
            label: 'Closing Price',
            data: <?php echo json_encode($closingPrices); ?>,
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            x: {
                type: 'linear',
                position: 'bottom'
            }
        }
    }
});
</script>

</body>
</html>
