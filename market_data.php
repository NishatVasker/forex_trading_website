<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forex Market Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #1a1a1a;
            color: #fff;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1, p {
            text-align: center;
        }

        .table-container {
            width: 80%;
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #333;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            transition: background-color 0.3s;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
            color: black;
        }

        tr:hover {
            background-color: #ddd;
            color: black;
        }

        .chart-container {
            width: 80%;
            margin-top: 20px;
        }

        .btn {
            margin: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #0d47a1;
        }
    </style>
</head>
<body>

<h1>Forex Market Data</h1>
<p>Interactive and Real-time Profit Data Analysis</p>

<div class="table-container">
    <!-- PHP Script Here: Display Table Data -->
</div>

<div class="chart-container">
    <canvas id="marketChart"></canvas>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fetch market data and update the chart
        const ctx = document.getElementById('marketChart').getContext('2d');
        const marketChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [], // Populate with time data
                datasets: [{
                    label: 'Profit',
                    data: [], // Populate with profit data
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Loss',
                    data: [], // Populate with loss data
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
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

        // Example: Update chart with real-time data
        // setInterval(() => {
        //     // Fetch new data and update chart
        // }, 60000); // Update every minute
    });
</script>

<!-- Include Bootstrap JS and Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php-login-google";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

// Function to update profit and loss values randomly for selected companies
function updateProfitAndLossRandomly($conn, $company_ids)
{
    foreach ($company_ids as $company_id) 
    {
        $profit = rand(50, 100);
        $loss = rand(10, 50);

        $sql = "UPDATE marketdata SET profit = '$profit', loss = '$loss' WHERE id = '$company_id'";

        if ($conn->query($sql) === TRUE) 
        {
            echo "<p>Data updated successfully for Company ID $company_id after 120 seconds</p>";
        } 
        else 
        {
            echo "<p>Error updating data: " . $conn->error . "</p>";
        }
    }
}

// Number of companies
$numCompanies = 5; // Change this to the desired number of companies
echo"<p> Initial Market Data </p>";
for ($i = 1; $i <= $numCompanies; $i++) 
{
    // Initial insert for each company
    $company_name = "Company " . $i;
    $opening_Price = rand(50, 150);
    $closing_Price = rand(50, 150);
    $profit = rand(50, 100);
    $loss = rand(10, 50);

    $sql = "INSERT INTO marketdata (company_name, opening_Price, closing_Price, profit, loss) 
            VALUES ('$company_name', '$opening_Price', '$closing_Price', '$profit', '$loss')";

    if ($conn->query($sql) === TRUE) 
    {
        //echo "<p>Initial data for $company_name inserted successfully</p>";
    } 
    else 
    {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

// Display the current data for all companies in an HTML table
$result = $conn->query("SELECT * FROM marketdata");
if ($result->num_rows > 0) 
{
    echo "<table>";
    echo "<tr><th>ID</th> <th>Company Name</th>  <th>Opening Price</th>  <th>Closing Price</th>  <th> Profit </th>  <th> Loss </th>  </tr>";
    while ($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["company_name"] . "</td> <td>" . $row["opening_Price"] . "</td>    <td>" . $row["closing_Price"] . "</td>  <td>" . $row["profit"] . "</td>   <td>" . $row["loss"] . "</td> </tr>";
    }
    echo "</table>";
} 
else 
{
    echo "<p>No data available</p>";
}

// Close the initial database connection
$conn->close();

// Sleep for 20 seconds
sleep(20);

// Reconnect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

// Select some companies to update profit and loss values after 20 seconds
$selectedCompanyIds = []; // Add the company IDs you want to update
updateProfitAndLossRandomly($conn, $selectedCompanyIds);
echo "<p> Updated data </p>";
// Display the updated data for all companies in an HTML table
$result = $conn->query("SELECT * FROM marketdata");
if ($result->num_rows > 0) 
{
    echo "<table>";
    echo "<tr><th>ID</th> <th>Company Name</th>  <th>Opening Price</th>  <th>Closing Price</th>  <th> Profit </th>  <th> Loss </th>  </tr>";
    while ($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["company_name"] . "</td> <td>" . $row["opening_Price"] . "</td>    <td>" . $row["closing_Price"] . "</td>  <td>" . $row["profit"] . "</td>   <td>" . $row["loss"] . "</td>  <td><a href='user_action.php?action=invest&id=" . $row["id"] . "'>Invest</a></td>  <td><a href='user_action.php?action=profit&id=" . $row["id"] . "'>Profit</a></td> <td><a href='user_action.php?action=loss&id=" . $row["id"] . "'>Loss</a></td> </tr>";
    }
    echo "</table>";
} 
else 
{
    echo "<p>No data available</p>";
}

// Close the final database connection
$conn->close();
?>

</body>
</html>
