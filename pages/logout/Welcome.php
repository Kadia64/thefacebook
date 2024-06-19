<?php 
    $_PATH = '/projects/thefacebook/functions/scripts/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'content.php';

    session_start();
    // Check Traversal
    // Check Logged Out Session

    $style = GetPageCSS('welcome');

    echo $style;

    


?>