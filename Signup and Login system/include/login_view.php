<?php
 declare(strict_types= 1);
 
 function output_username(){
    if (isset($_SESSION['user_id'])){
        echo'you are logged in as' . $_SESSION['user_username'];
    }
    else{
        echo 'you are not logged in';
    }
 }
 function check_login_errors() {
     if (isset($_SESSION['error_login'])) {
         $errors = $_SESSION['error_login'];
         echo '<br>';
         foreach ($errors as $error) {
             echo '<p class="form-error">' . htmlspecialchars($error) . '</p>';
         }
         unset($_SESSION['error_login']);
     } if (isset($_GET['login']) && $_GET['login'] === 'success') {
         echo '<div class="success-container">';
         echo '<p class="form-success">Login Success</p>';
         echo '</div>';
     }
 }
 ?>
 