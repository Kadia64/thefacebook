<?php 

const RELATIVE_PATH = '/projects/thefacebook/';

$_10min_expiration = time() + (10 * 60);
$_30min_expiration = time() + (30 * 60);
date_default_timezone_set('America/Chicago');

function CheckTraversal() {
    // if you enter an unauthorized page, you will automatically be redirected
}
function Redirect($page, $type = 'php') { 
    /* redirects to the requested page */

    if (!isset($_SESSION['relative-path']))
        SetRelativePath();
    
    $root = $_SESSION['relative-path'];
    if ($type == 'js') {
        echo "<script>window.location.href =  \"../../$page\"</script>";
    } else {
        header('Location: '.$root.$page);
    }
}
function CheckLoggedOutSessionID($path) {
    if (!isset($_SESSION['logged-out-session-id'])) {
        SetRelativePath();
        $timestamp = microtime(true);
        $random = rand(10000, 90000);
        $_SESSION['logged-out-session-id'] = hash('sha256', $timestamp.$random);
    }
}
function SetRelativePath() {    
    $_SESSION['relative-path'] = RELATIVE_PATH;
}
function CheckActiveSession() {
    // if the cookie isn't set, logout
}


?>