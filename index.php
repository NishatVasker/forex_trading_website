<?php


require_once 'config.php';
require_once 'index.php';


if(isset($_SESSION['user_token']))
{
  header("Location: welcome.php");
}
else 
{
  //echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";

  echo '<div style="width: 300px; margin: auto; border: 1px solid #ccc; padding: 20px; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px;">';
  echo '<h2>Login with your Google Account</h2>';
  echo '<p>Click the button below to log in with your Google account:</p>';
  echo '<a href="' . $client->createAuthUrl() . '" style="display: inline-block; background-color: #4285F4; color: #ffffff; text-decoration: none; padding: 10px 20px; border-radius: 5px; font-weight: bold;">Google Login</a>';
  echo '</div>';

}
  
?>