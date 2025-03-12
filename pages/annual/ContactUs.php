<?php 
    $_PATH = '/projects/thefacebook/functions/scripts/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'content.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'session-handler.php';
    
    session_start();
    CheckTraversal();
    CheckLoggedOutSessionID('/pages/annual/ContactUs.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php HeaderInfo('Contact'); ?>
    <?php echo GetPageCSS('contact'); ?>
    <style>
        .contact-us-page-window {
            margin: 0 auto;
            width: calc(var(--page-width) - 240px);
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
                <?php WindowText('Contact Us'); ?>
                <h4>[ Contact Us ]</h4>
                <div class="contact-us-page-window">
                </div>
            </div>

        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>        

    </div>
</body>
</html>