<?php 
    $_PATH = '/projects/thefacebook/functions/scripts/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'content.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'session-handler.php';
    
    session_start();
    CheckTraversal();
    CheckLoggedOutSessionID('/pages/annual/Terms.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php HeaderInfo('Terms and Conditions'); ?>
    <?php echo GetPageCSS('terms'); ?>
    <style>
        .terms-page-window {
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
                <?php WindowText('Thefacebook Terms of Use'); ?>
                <h4>[ Terms of Use ]</h4>
                <div class="terms-page-window">                    
                </div>
            </div>

        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>        

    </div>
</body>
</html>