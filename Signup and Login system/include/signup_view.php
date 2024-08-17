<?php

declare(strict_types=1);


function signup_input()
{
    if (isset($_SESSION['signup_data']['username']) && !isset($_SESSION['signup_error']['username_taken'])) {
        echo '<label for="name" class="mylab">UserName</label>';
        echo '<input type="text" id="name" name="username" value="' . $_SESSION['signup_data']['username'] . '">';
    } else {
        echo '<label for="name" class="mylab">UserName</label>';
        echo '<input type="text" id="name" name="username">';
    }
    if (isset($_SESSION['signup_data']['email']) && !isset($_SESSION['signup_error']['email_used']) && !isset($_SESSION['signup_error']['invalid_email'])) {
        echo '<label for="email" class="mylab">Email</label>';
        echo '<input type="text" id="name" name="email" value="' . $_SESSION['signup_data']['email'] . '">';
    } else {
        echo '<label for="email" class="mylab">Email</label>';
        echo '<input type="text" id="name" name="email">';
    }
    echo '<label for="password" class="mylab">Password</label>';
    echo '<input type="password" id="password" name="password">';

    echo '<button>Sign Up</button>';
}



function check_signup_errors()
{
    if (isset($_SESSION['error_signup'])) {
        $errors = $_SESSION['error_signup'];

        echo '<div class="error-container">';
        foreach ($errors as $error) {
            echo '<p class="form-error">' . htmlspecialchars($error) . '</p>';
        }
        echo '</div>';
        unset($_SESSION['error_signup']);
    } elseif (isset($_GET['signup']) && $_GET['signup'] === 'success') {
        echo '<div class="success-container">';

        echo '<p class="form-success">Signup Success</p>';
        echo '</div>';
    }
}
?>
