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

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_token'])) 
{
    header("Location: index.php");
    die();
}

// Fetch user information
$sql = "SELECT * FROM users WHERE token = '{$_SESSION['user_token']}'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    $userinfo = mysqli_fetch_assoc($result);
    $user_id = $userinfo['id'];
    $initial_amount = 100; // Initial amount given to each user
}

// Process user actions (invest, gain profit, incur loss)
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $action = $_POST['action'];
    $amount = $_POST['amount'];

    // Validate the amount
    if (!is_numeric($amount) || $amount <= 0) 
    {
        echo "Invalid amount!";
        die();
    }

    // Perform user action based on the chosen action
    switch ($action) 
    {
        case 'invest':
            // Check if the user has enough balance
            if ($amount > $initial_amount) 
            {
                echo "Insufficient balance!";
                die();
            }

            // Update user balance and record the transaction
            $initial_amount -= $amount;
            $sql = "INSERT INTO user_transactions (user_id, action, amount) VALUES ('$user_id', 'invest', '$amount')";
            break;

        case 'profit':
            // Update user balance and record the transaction
            $initial_amount += $amount;
            $sql = "INSERT INTO user_transactions (user_id, action, amount) VALUES ('$user_id', 'profit', '$amount')";
            break;

        case 'loss':
            // Update user balance and record the transaction
            $initial_amount -= $amount;
            $sql = "INSERT INTO user_transactions (user_id, action, amount) VALUES ('$user_id', 'loss', '$amount')";
            break;

        default:
            echo "Invalid action!";
            die();
    }

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) 
    {
        // Update the user's balance in the users table
        $updateBalanceSql = "UPDATE users SET balance = '$initial_amount' WHERE id = '$user_id'";
        $conn->query($updateBalanceSql);

        echo "Transaction successful!";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Display user information and provide a form for transactions
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Transactions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #070707;
            color: white;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #e8491d 3px solid;
        }
        header a {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            margin: 0;
            list-style: none;
            overflow: hidden;
        }
        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        header .highlight, header .current a {
            color: #f5fd0d;
            font-weight: bold;
        }
        header a:hover {
            color: #ffffff;
            font-weight: bold;
        }
        .button {
            height: 50px;
            background: #e8491d;
            border: 0;
            padding-left: 20px;
            padding-right: 20px;
            color: #ffffff;
            font-size: 18px;
            cursor: pointer;
        }
        .button:hover {
            background: #333;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #50b3a2;
            color: white;
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Investment</span> Portal</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="current"><a href="#">Transactions</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2>Welcome, <?= $userinfo['full_name'] ?>!</h2>
        <p>Your current balance: $<?= $initial_amount ?></p>

        <h3>Perform a transaction:</h3>
        <form method="post" action="">
            <label for="action">Choose action:</label>
            <select name="action" id="action">
                <option value="invest">Invest</option>
                <option value="profit">Profit</option>
                <option value="loss">Loss</option>
            </select>

            <label for="amount">Enter amount:</label>
            <input type="number" name="amount" id="amount" required>

            <button type="submit" class="button">Submit</button>
        </form>

        <h3>Transaction History:</h3>
        <!-- PHP code for transaction history -->
    </div>

    <script>
        // Add any JavaScript interactions here
    </script>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
