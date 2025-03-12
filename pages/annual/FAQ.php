<?php 
    $_PATH = '/projects/thefacebook/functions/scripts/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'content.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'session-handler.php';
    
    session_start();
    CheckTraversal();
    CheckLoggedOutSessionID('/pages/annual/FAQ.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php HeaderInfo('FAQ'); ?>
    <?php echo GetPageCSS('faq'); ?>
    <style>
        .faq-page-window {
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
                <?php WindowText('Frequently Asked Questions'); ?>
                <h4>[ FAQ ]</h4>
                <div class="faq-page-window">                    
                </div>
            </div>

        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>        

    </div>
</body>
</html>