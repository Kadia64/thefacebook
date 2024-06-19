<?php 


/* Static */
function HeaderInfo() {

}
function TopContent() {

}
function BottomContent() {

}
function LeftLoginForm() {

}
function LeftLoginLinks() {

}
function LeftLinksSearch() {

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
    $style = match ($page) {
        'welcome' => '
        
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
    return $style;
}
/* Styles */
?>