<?php
require_once('./include/sessiondb.php');
require_once('./include/signup_view.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SignupForm</title>
</head>

<body>




    <div class="signup-container">

        <h2>Sign Up</h2>
        <form class="signup-form" action="./include/signup.php" method="post">
           
            <?php
            signup_input();
            ?>
        </form>
        
        <?php
    check_signup_errors();
    ?>
    </div>
  

</body>

</html>