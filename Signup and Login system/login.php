<?php
require_once('./include/sessiondb.php');
require_once('./include/login_view.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form class="login-form" action="./include/login.php" method="post">
        <div class="form-group">
            <label for="login-email">Username:</label>
            <input type="text" id="login-email" name="username">
        </div>
        <div class="form-group">
            <label for="login-password">Password:</label>
            <input type="password" id="login-password" name="password">
        </div>
        <button type="submit">Login</button>
        
    </form>
    
    <form action="./include/logout.php" method="post" >
        <button class="logout" style="width: 100%;
    padding: 10px;
    background-color: #1A2245;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 10px;">Logout</button>
   </form>
   <?php check_login_errors();
    output_username();
    ?>
</div>

</body>
</html>