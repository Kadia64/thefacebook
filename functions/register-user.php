<?php 
$_PATH = '/projects/thefacebook/functions/';
require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'scripts/session-handler.php';
require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'scripts/account-manager.php';
require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'scripts/cookies.php';



session_start();
unset($_SESSION['logged-out-session-id']);

$email = $_SESSION['email'];
$username = $_SESSION['username'];
$education_status = $_SESSION['education-status'];
$password = $_SESSION['password'];
$password_salt = $_SESSION['password-salt'];

$account_info = [
    'username' => $username,
    'email' => $email,
    'education-status' => $education_status,
    'password' => $password,
    'profile-image' => null
];
$register_info = [
    'first-name' => $_POST['first-name'],
    'last-name' => $_POST['last-name'],
    'sex' => $_POST['sex'],
    'birthday' => $_POST['birthday'],
    'home-address' => $_POST['home-address'],
    'home-town' => $_POST['home-town'],
    'highschool' => $_POST['highschool'],
    'mobile' => $_POST['mobile'],
    'website' => $_POST['website'],
    'looking-for' => $_POST['looking-for'],
    'interested-in' => $_POST['interested-in'],
    'relationship-status' => $_POST['relationship-status'],
    'political-views' => $_POST['political-views'],
    'interests' => $_POST['interests'],
    'favorite-music' => $_POST['favorite-music'],
    'favorite-movies' => $_POST['favorite-movies'],
    'about-me' => $_POST['about-me']
];


CreateAccount($account_info, $register_info);

// get your id from sql
$id = 12345;
$session_id = hash('sha256', $email.$username.$id.microtime(true));
$cookies = new CookieHandler();

// set the user's cookies

// start the user's session
// cache the profile image
// close sql connection
// redirect to MainProfile.php

?>