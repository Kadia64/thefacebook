<?php 


/* Static */
function HeaderInfo($title) {
    $root = $_SESSION['relative-path'];    
    echo '
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="'.$root.'images\facebook-icon.ico">
        <link rel="stylesheet" href="'.$root.'main-style.css">
        <title>[ thefacebook ] '.$title.'</title>
    ';
}
function TopContent($logged_in) {
    $root = $_SESSION['relative-path'];    
    $links = ($logged_in) ? '

    ' : '
        <a href="'.$root.'pages/logout/Login.php">login</a>
        <a href="'.$root.'pages/logout/Register.php">register</a>
        <a href="'.$root.'pages/annual/About.php">about</a>
    ';
    echo '
        <div class="main-top-box">
            <div class="main-top-content">
                <img src="'.$root.'images/thefacebook-left.jpg">
            </div>
            <div class="main-top-content">
                <img src="'.$root.'images/thefacebook-logo.jpg">
                <br>
                <div>
                    '.$links.'
                </div>
            </div>
        </div>
    ';
}
function BottomContent() {
    $root = $_SESSION['relative-path'];
    echo '
        <div class="bottom-content">
            <a href="'.$root.'pages/annual/About.php" class="lightblue-link">about</a>
            <a href="'.$root.'pages/annual/ContactUs.php" class="lightblue-link">contact</a>
            <a href="'.$root.'pages/annual/JobDescriptions.php" class="lightblue-link">jobs</a>
            <a href="'.$root.'pages/annual/FAQ.php" class="lightblue-link">faq</a>
            <a href="'.$root.'pages/annual/Terms.php" class="lightblue-link">terms</a>
            <a href="'.$root.'pages/annual/PrivacyPolicy.php" class="lightblue-link">privacy</a>
            <div>
                <p>a Mark Zuckerberg production</p>
                <p>Thefacebook c 2004</p>
            </div>
        </div>
    ';
}
function LeftLoginForm() {
    $root = $_SESSION['relative-path'];
    echo '
        <div class="left-login-form">
            <form method="POST" action="">
                <div class="left-login-box">
                    <label for="left-email">Email:</label>
                    <input type="email" id="left-email" name="email" class="left-email-input" required>
                    <label for="left-password">Password:</label>
                    <input type="password" id="left-password" name="password" class="left-password-input" required>
                </div>
                <div class="left-login-buttons">
                    <input type="submit" name="left-login-button" value="login" class="left-login-button lightblue-button">
                    <a href="'.$root.'pages/logout/Register.php" class="lightblue-button">register</a>
                </div>
            </form>
        </div>
    ';
}
function LeftLoginLinks() {
    $root = $_SESSION['relative-path'];
    echo '
        <div class="left-login-links">
            <div class="left-login-flexbox">
                <div>
                    <a href="'.$root.'pages/logout/Welcome.php" class="lightblue-link">[ main ]</a>
                </div>
                <div>
                    <a href="'.$root.'pages/logout/Login.php" class="lightblue-link">[ login ]</a>
                </div>
                <div>
                    <a href="'.$root.'pages/logout/Register.php" class="lightblue-link">[ register ]</a>
                </div>
            </div>
        </div>
    ';
}
function LeftLinksSearch() {

}

function WindowText($left_text, $right_text = null, $return = false) {
    $right_text = ($right_text != null) ? '<span class="window-text-right">'.$right_text.'</span>' : null;
    $content = '
        <div class="window-text">
            <span class="window-text-left">'.$left_text.'</span>
            '.$right_text.'
        </div>
    ';

    if (!$return) {
        echo $content;
    } else return $content;
}
function DisplayLink($text, $page, $type) {
    $root = $_SESSION['relative-path'];
    $class = match($type) {
        'button' => 'class="lightblue-button"',
        'lightblue' => 'class="lightblue-link"'
    };

    return '<a href="'.$root.$page.'" '.$class.'>'.$text.'</a>';    
}
/* Static */

/* Dynamic */
function DisplayRegisterAboutForm() {

}
function DisplayProfileInformation() {

}
function DisplayUpdateProfileForm() {

}
function DisplayOtherSchools() {

}
function DisplaySearchResults() {

}
function BuildSchoolsSelection() {

}
/* Dynamic */

/* Styles */
function GetPageCSS($page) {
    $style = '<style>';
    $style .= match ($page) {
        'welcome' => '
            .welcome-page-window {
                width: calc(var(--page-width) - 240px);
                margin: 0 auto;
            }
            .welcome-page-content ul {
                margin: -10px 0px 0px -15px;            
            }
            .welcome-page-buttons {
                text-align: center;
                padding-bottom: 10px;
            }
        ',
        'login' => '
            .login-page-window {
                width: calc(var(--page-width) - 240px);
                margin: 0 auto;
            }
            .login-page-content {
                display: flex;
                flex-direction: column;
            }
            .login-page-form {
                padding-top: 20px;
            }
            .login-page-form div {
                width: 280px;
                margin: 0 auto;
                flex: 1;
                display: grid;
                grid-template-columns: 23% 78%;
                row-gap: 3px;
            }
            .login-page-form div div {
                height: 20px;
            }
            .login-page-form div div:nth-child(odd) {
                margin-top: 2px;
            }
            .login-page-form div div label {
                padding-top: -10px;
            }
            .email-input,
            .password-input {
                width: 180px;
            }
            .login-buttons {
                margin-top: 10px!important;
                width: 100px!important;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 50px;
            }
            .login-buttons div {
                flex: 1;
            }
            .login-page-text {
                margin: 0 auto;
                flex: 1;
            }
        ',
        'register' => '
            .register-page-window {
                width: calc(var(--page-width) - 220px);
                margin: 0 auto;
            }
            .register-page-form {            
                width: calc(var(--page-width) - 360px);
                margin: 0 auto;
            }
            .register-page-grid {
                display: grid;
                grid-template-columns: 40% 60%;
                grid-row-gap: 2px;
            }
            .register-page-terms-box {
                display: flex;
                gap: 5px;
            }
            .register-page-terms-box input,
            .register-page-terms-box a {
                flex: 1;
            }
            .register-page-grid input {
                width: 160px;
            }
            .register-page-grid select {
                width: 120px;
            }
            .register-page-bottom-box div:last-child {
                display: flex;
                margin-left: 8px;
                margin-top: -12px;
            }        
            .register-page-bottom-box div:last-child p:first-child {
                flex: 0.5;
                margin-top: 13px;            
            }
            .register-page-bottom-box div:last-child p:last-child {
                flex: 12;
            }
            .register-page-button {
                padding: 10px;
                text-align: center;
            }
        ',
        'registerabout' => '
        
        ',
        'about' => '
        
        ',
        'contact' => '
        
        ',
        'jobdescriptions' => '
        
        ',
        'faq' => '
        
        ',
        'terms' => '
        
        ',
        'privacypolicy' => '
        
        ',
        'mainprofile' => '
        
        ',
        'profile' => '
        
        ',
    };
    return $style.'</style>';
}
/* Styles */
?>