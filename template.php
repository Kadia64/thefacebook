<?php 
    $_PATH = '/projects/thefacebook/functions/scripts/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'content.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'session-handler.php';
    
    session_start();
    CheckTraversal();
    LoggedOutSession('/pages/logout/Welcome.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php HeaderInfo('Template'); ?>
    <?php echo GetPageCSS('welcome'); ?>
    <style>
        
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
                <?php WindowText('Template'); ?>
                <h4>[ Welcome To Thefacebook ]</h4>
            </div>

        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>        

    </div>
</body>
</html>