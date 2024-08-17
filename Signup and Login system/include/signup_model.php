<?php 

declare(strict_types=1);


function get_username(PDO $pdo, string $username) {
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


function get_email(PDO $pdo, string $email) {
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


function set_user(PDO $pdo, string $username, string $email, string $password): bool {
    $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($query);
    $options = [
        'cost' => 12
    ];
    $hashedPass = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $hashedPass);

    try {
        return $stmt->execute();
    } catch (PDOException $e) {
        echo 'Query failed: ' . $e->getMessage();
        return false;
    }
}
