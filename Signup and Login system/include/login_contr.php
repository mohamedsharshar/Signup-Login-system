<?php

declare(strict_types=1);


function is_input_empty(string $username, string $password) {
    if (empty($username) && empty($password)){
        return true;
    }
    else{
        return false;
    }
}


function is_username_wrong(array|bool $result) {
    if (!$result){
        return true;
    }
    else{
        return false;
    }
}


function is_password_wrong(string $password, string $hashed_password): bool {
    return !password_verify($password, $hashed_password);
}
