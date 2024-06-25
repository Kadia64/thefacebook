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
    <?php HeaderInfo('Welcome'); ?>
    <?php echo GetPageCSS('welcome'); ?>
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
                <?php WindowText('Welcome to Thefacebook!'); ?>
                <h4>[ Welcome To Thefacebook ]</h4>

                <div class="welcome-page-window">
                    <div class="welcome-page-content">
                        <p>Thefacebook is an online directory that connects people through social networks at colleges</p>
                        <p>We have opened up Thefacebook for popular consumption at <b>Harvard University</b>.</p>
                        <p>You can use Thefacebook to:</p>
                        <ul>
                            <li>Search for people at your school</li>
                            <li>Find out who are in your classes</li>
                            <li>Look up your friends' friends</li>
                            <li>See a visualization of your social network</li>
                        </ul>
                        <p>To get started, click below to register. If you have already registered, you can log in.</p>
                    </div>
                    <div class="welcome-page-buttons">
                        <?php echo DisplayLink('Login', 'pages/logout/Login.php', 'button'); ?>
                        <?php echo DisplayLink('Register', 'pages/logout/Register.php', 'button'); ?>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>        

    </div>
</body>
</html>