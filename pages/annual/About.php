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
    <?php HeaderInfo('About'); ?>
    <?php echo GetPageCSS('about'); ?>
    <style>
        .about-page-window {
            margin: 0 auto;
            width: calc(var(--page-width) - 240px);
            display: flex;
        }
        .about-page-content {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .about-page-content .window-text-box {
            flex: 1;
        }
        .window-text-box p {
            margin: 0 auto;
            padding: 12px;            
        }
        .about-home-button {
            padding: 12px;
            text-align: center;
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
                <?php WindowText('About Thefacebook'); ?>
                <h4>[ About ]</h4>
                <div class="about-page-window">
                    <div class="about-page-content">                    
                        <div class="window-text-box">
                            <?php WindowText('The Project'); ?>
                            <div>
                                <p>Thefacebook is an online directory that connects people through social networks at colleges and universities.</p>
                            </div>
                        </div>
                        <div class="window-text-box">
                            <?php WindowText('The People'); ?>
                            <p>The People</p>
                        </div>
                        <div class="window-text-box">
                            <?php WindowText('News Coverage'); ?>
                            <p>news</p>
                        </div>                        
                    </div>                                        
                </div>
                <div class="about-home-button">
                    <?php echo DisplayLink('Home', '/pages/logout/Welcome.php', 'button'); ?>
                </div>
            </div>

        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>        

    </div>
</body>
</html>