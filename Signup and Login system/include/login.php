<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    try {
        require_once('./databaseconn.php');
        require_once('./login_contr.php');
        require_once('./login_model.php');

        // Error handling
        $errors = [];

        if (is_input_empty($username, $password)) {
            $errors['empty_input'] = 'Fill in all fields!';
        } 

        $result = get_username($pdo, $username);
        if (is_username_wrong($result)) {
            $errors['login_incorrect'] = 'Incorrect Info username!';
        }

        if (!is_username_wrong($result) && is_password_wrong($password, $result['password'])) {
            $errors['login_incorrect'] = 'Incorrect Info user or password!';
        }

        require_once('./sessiondb.php');
        session_start();

        if ($errors) {
            $_SESSION['error_login'] = $errors;
            header('Location: ../login.php');
            exit();
        }

        $newsessionid = session_create_id();
        session_commit(); // End current session
        session_id($newsessionid . '_' . $result['id']);
        session_start(); // Restart session with new ID

        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_username'] = htmlspecialchars($result['username']);
        $_SESSION['last_regeneration'] = time();

        header('Location: ../login.php?login=success');
        $pdo = null;
        $stmt = null;
        exit();
    } catch (PDOException $e) {
        $_SESSION['error_login'] = ['db_error' => 'A database error occurred. Please try again later.'];
        header('Location: ../login.php');
        exit();
    }
} else {
    header('Location: ../login.php');
    exit();
}

