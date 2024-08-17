<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        require_once('./databaseconn.php');
        require_once('./signup_model.php');
        require_once('./signup_contr.php');

        // Error handling
        $errors = [];

        if (if_input_empty($username, $email, $password)) {
            $errors['empty_input'] = 'Fill in all fields!';
        }
        if (!if_email_valid($email)) {
            $errors['invalid_email'] = 'Invalid email use!';
        }
        if (if_username_taken($pdo, $username)) {
            $errors['username_taken'] = 'Username is already taken';
        }
        if (if_email_registered($pdo, $email)) {
            $errors['email_used'] = 'Email already registered!';
        }

        require_once('./sessiondb.php');

        if ($errors) {
            $_SESSION['error_signup'] = $errors;
            $signupdata=[
                'username'=> $username,
                'email'=> $email
            ];
            $_SESSION['signup_data'] = $signupdata;

            header('Location: ../index.php');
            die();
        }

        create_user($pdo, $username, $email, $password);
        header('Location: ../index.php?signup=success');
        $pdo=null;
        $stmt=null;
        die();
    } catch (PDOException $e) {
        echo 'Query failed: ' . $e->getMessage();
    }
} else {
    header('Location: ../index.php');
    exit;
}
