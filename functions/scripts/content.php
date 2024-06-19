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
                    <input type="submit" name="left-login-button" value="login" class="left-login-button">
                    <a href="'.$root.'pages/logout/Register.php">register</a>
                </div>
            </form>
        </div>
    ';
}
function LeftLoginLinks() {

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
            div {
                margin: 0;
            }
        ',
        'login' => '
        
        ',
        'register' => '
        
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