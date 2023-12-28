<?php

require_once 'config.php';

require_once 'welcome.php';




// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) 
{
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    // get profile info
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $userinfo = [
        'email' => $google_account_info->getEmail(),
        'first_name' => $google_account_info->getGivenName(),
        'last_name' => $google_account_info->getFamilyName(),
        'gender' => $google_account_info->getGender(),
        'full_name' => $google_account_info->getName(),
        'picture' => $google_account_info->getPicture(),
        'verifiedEmail' => $google_account_info->getVerifiedEmail(),
        'token' => $google_account_info->getId(),
    ];

    $email = mysqli_real_escape_string($conn, $userinfo['email']);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        die();
    }

    if (mysqli_num_rows($result) > 0) 
    {
        // User exists
        $userinfo = mysqli_fetch_assoc($result);
        $token =  $userinfo['token'];
    } 
    else 
    {
        // User does not exist, insert into database
        $sql = "INSERT INTO users (email,first_name,last_name,gender,full_name,picture,verifiedEmail,token) 
                VALUES ('$email', '{$userinfo['first_name']}','{$userinfo['last_name']}',
                        '{$userinfo['gender']}','{$userinfo['full_name']}','{$userinfo['picture']}',
                        '{$userinfo['verifiedEmail']}','{$userinfo['token']}' )";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "Error: " . mysqli_error($conn);
            die();
        }

        echo "User is created ";
        $token = $userinfo['token'];
    }

    // User token
    $_SESSION['user_token'] = $token;
}

else 
{
  if(!isset($_SESSION['user_token']))
  {
	  header("Location: index.php");
	  die();
  }

  $sql ="SELECT * FROM users WHERE token = '{$_SESSION['user_token']}'";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)> 0)
  {
    $userinfo = mysqli_fetch_assoc($result);
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <title>Login With Google</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #121212; /* Dark background */
            color: #fff; /* Light text */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        .container {
            animation: fadeIn 0.5s;
            margin-bottom: 20px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .card {
            width: 300px;
            background-color: #1e1e1e; /* Dark card background */
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
        }

        .card-img-top {
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .list-group-item {
            background-color: #1e1e1e; /* Match card background */
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 16px;
        }

        .list-group-item a {
            color: #4b8bec; /* Light blue for links */
            text-decoration: none;
            font-weight: bold;
        }

        .list-group-item a:hover {
            color: #82b1ff; /* Lighter blue on hover */
            text-decoration: underline;
        }

        .container-low {
            text-align: center;
        }

        .container-low h3 {
            margin-bottom: 20px;
        }

        .container-low li {
            list-style: none;
            margin-bottom: 10px;
        }

        .container-low li a {
            background-color: #4b8bec; /* Light blue background for buttons */
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .container-low li a:hover {
            background-color: #82b1ff; /* Lighter blue on hover */
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card">
            <img src="<?= $userinfo['picture'] ?>" class="card-img-top" alt="<?= $userinfo['full_name'] ?>">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Full Name: <?= $userinfo['full_name'] ?></li>
                    <li class="list-group-item">Email Address: <?= $userinfo['email'] ?></li>
                    <li class="list-group-item"><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-low">
        <h3>View Today's Market Exchanges</h3>
        <ul>
            <li><a href='market_data.php'>Market</a></li>
            <li><a href='user_action.php'> Trading </a></li>
            <li><a href='market_chart.php'> Market Chart </a></li>
            
            <!--- <li><a href='page.php'> Market Indicators </a></li> --->
            
        </ul>
    </div>

    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
