<?php 
$_PATH = '/projects/thefacebook/functions/scripts/';
require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'session-handler.php';
require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'account-manager.php';
require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'sql-handler.php';

session_start();

$email = $_POST['email'];
$username = $_POST['username'];

// verify username and email doesn't already exist
// will return username, email, or both and return back to the previous page
$exists = 'none';

switch ($exists) {
    case 'username':

        break;
    case 'email':

        break;
    case 'both':

        break;
    default:
        // they both don't exist
        
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['education-status'] =  $_POST['education-status'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['password-salt'] = 'none';
        Redirect('/pages/logout/RegisterAboutUser.php');
        break;
}

//var_dump($_SESSION);



?>