<?php 

function Redirect($page, $type = 'php') {
    if (!isset($_SESSION['relative-path']))
        SetRelativePath();
    
    $root = $_SESSION['relative-path'];
    if ($type == 'js') {
        echo "<script>window.location.href =  \"../../$page\"</script>";
    } else {
        header('Location: '.$root.$page);
    }
}
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