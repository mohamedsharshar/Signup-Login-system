<?php

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_cookie_params([
    "lifetime" => 1800, 
    "domain"   => "localhost", 
    "path"     => "/", 
    "secure"   => false, // Set to true if using HTTPS
    "httponly" => true 
]);

session_start();

$interval = 60 * 30; 
if(isset($_SESSION['user_id'])){
    if (!isset($_SESSION['last_regeneration'])) {
        $_SESSION['last_regeneration'] = time();
    } else {
        if (time() == $_SESSION['last_regeneration'] >= $interval) {
            session_regenerate_id(true); 
            $_SESSION['last_regeneration'] = time(); 
        }
    }
}
else{
    if (!isset($_SESSION['last_regeneration'])) {
        regenerate_session_id_signup();
    } else {
        if (time() == $_SESSION['last_regeneration'] >= $interval) {
            regenerate_session_id_signup();
        }
    }

}

function regenerate_session_id_signup(){
    session_regenerate_id(true); 
    $_SESSION['last_regeneration'] = time(); 
}

function session_regenerate_id_login(){
    session_regenerate_id(true); 

    $userid=$_SESSION['user_id'];
    $newsession_id=session_create_id();
    $session_id=$newsession_id . '_'. $userid;
    session_id($session_id);
    $_SESSION['last_regeneration'] = time(); 

}