<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ingia.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body{ 
            font-family: Times;
            font: 12px sans-serif;
            background-color: #1b1b32;
            color: #f5f6f7;
            margin: 20;
        }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to 
    <a href="main.html"></a>mkulima market.</h1>
    <h1 styles="font-size:1.5rem">The online marketplace for farm fresh produce 🍅🥕🥦</h1>
    <p><a href="main.html" style="color:white;text-align:center;font-size:1.2rem;background:green;">Click here to buy farm fresh produce </a></p>
    <p><a href="rejesha-nenosiri.php" style="color:white;text-align:center;font-size:1.2rem;background:green;">Reset Your Password</a></p>
    <p><a href="ondoka.php" style="color:white;text-align:center;font-size:1.2rem;background:green;">Sign Out of Your Account</a></p>
</body>
</html>