<?php 

function CheckTraversal() {

}
function LoggedOutSession($path) {

    if (!isset($_SESSION['logged-out-session-id'])) {
        SetRelativePath();
        SetLoggedOutSessionID();
    }
}
function SetLoggedOutSessionID() {
    $timestamp = microtime(true);
    $random = rand(10000, 90000);
    $_SESSION['logged-out-session-id'] = hash('sha256', $timestamp.$random);
}
function SetRelativePath() {    
    $_SESSION['relative-path'] = '/projects/thefacebook/';
}

?>