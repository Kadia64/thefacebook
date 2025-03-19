<?php 
    $_PATH = '/projects/thefacebook/functions/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'scripts/content.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'scripts/session-handler.php';
    
    session_start();
    CheckTraversal();
    CheckLoggedOutSessionID('/pages/annual/PrivacyPolicy.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php HeaderInfo('Privacy Policy'); ?>
    <?php echo GetPageCSS('privacy_policy'); ?>
    <style>
        .privacy-policy-page-window {
            margin: 0 auto;
            width: calc(var(--page-width) - 220px);
        }        
        .annual-page-window:last-child {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="main-pagebox">
        
        <!-- Top Content -->
        <?php TopContent(false); ?>        

        <!-- Main Page -->
        <div class="main-page-flexbox">

            <!-- Left Window -->
            <?php LeftLoginForm(); ?>

            <!-- Right Window -->
            <div class="right-main-window">
                <?php WindowText('Thefacebook Privacy Policy'); ?>
                <h4>[ Privacy Policy ]</h4>
                <div class="privacy-policy-page-window">
                
                    <?php
                        AnnualPageWindow('Coverage', "This privacy statement covers the site www.HarvardConnection.co. Because we want to demonstrate our commitment to our users' privacy, we will disclose our information and privacy practices below.");
                        AnnualPageWindow('About Thefacebook and the Information We Collect', "This privacy statement covers the site www.HarvardConnection.co. Because we want to demonstrate our commitment to our users' privacy, we will disclose our information and privacy practices below.");
                        AnnualPageWindow('Information Collected by Thefacebook', "Thefacebook collects user-submitted account information such as name and email address to identify users and send notifications related to use of the site. Thefacebook also collects user-submitted profile information such as gender, field location, courses, etc.<br><br>Thefacebook also collects information that is not personally identifiable and not submitted directly by users, such as browser type and IP address. This information is gathered for all users to the site.<br><br>Thefacebook collects information from other sources, such as newspapers and instant messaging services. This information is gathered regardless of use of the site.");
                        AnnualPageWindow('Use of Information Obtained by Thefacebook', "Profile information, as well as name, email and photo, are displayed to people in the groups specified in a user's privacy settings to support the function of the site. Except when inviting a friend to join the site, a user's name and email will never be given to any user of the site who does not belong to at least one of the groups specified in a user's privacy settings.<br><br>We use server, IP and browser type for site administration. We also use information not directly submitted to Thefacebook by users to supplement users' profiles unless they specify that they do not want this done in their privacy settings.");
                        AnnualPageWindow('Spam Policy', "Email addresses will never be sold to anyone, and they will not be used for spam or any other purpose outside of the site itself.");
                        AnnualPageWindow('Links', "This site may contain links to other websites. Thefacebook is not responsible for the privacy practices of other web sites. We encourage our users to be aware when they leave our site and to read the privacy statements of each annd every web site that collects personally identifiable information. This privacy statement applies soley to information collected by this web site.");
                        AnnualPageWindow('Third Party Advertising', "Advertisements that appear on this web site are delivered to users by our advertising partners. Our advertising partners may set cookies. Doing this allows the advertising network to recognize your computer each time they send you an advertisement. In this way, they may compile information about where you, or others who are using your computer, saw their advertisments and determine which advertisements are clicked. This information allows an advertising network to deliver targeted advertisements that they believe will be of most interest to you. Thefacebook does not have access to or control of the cookies that may be placed by the third party advertising servers of ad networks. <br><br>This privacy statement covers the use of cookies by Thefacebook and does not cover the use of cookies by any of its advertisers.");
                        AnnualPageWindow('Changing or Removing Information', "Thefacebook users may modify or remove any of their personal information at any time by logging into their account. Information will be updated immediately and old information will never be displayed to any user of the site.");
                        AnnualPageWindow('Security', 'Thefacebook accounts are password-protected. This web site takes every precaution to protect our users\' information. Passwords are stored in hashed form in our database, and different sections of users\' profiles are stored in different parts of our database to seperate access to all information and make it more difficult to piece everything together. If you have any questions about the security of our web site, please <a href="" class="lightblue-link">contact us</a>.');
                        AnnualPageWindow('Changes in Our Privacy Policy', "We reserve the right to change our privacy policy at any time. If we do this, we will post the changes on our web site so our users are always aware of what information we collect, how we use it, and under what circumstances, if any, we disclose it. If we are going to use users' personally identifiable innformation in a manner different from that stated at the time of collection, we will notify users via email.");
                        AnnualPageWindow('Contacting the Web Site', 'If you have any questions about this privacy statement, the practices of this site, or your dealings with this web site, please <a href="" class="lightblue-link">contact us</a>.');
                    ?>

                </div>
            </div>
        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>        

    </div>
</body>
</html>