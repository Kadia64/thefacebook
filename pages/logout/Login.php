<?php 
    $_PATH = '/projects/thefacebook/functions/scripts/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'content.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'session-handler.php';

    session_start();
    CheckTraversal();
    LoggedOutSession('/pages/logout/Login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php HeaderInfo("Login"); ?>
    <?php echo GetPageCSS('login'); ?>    
</head>
<body>
    <div class="main-pagebox">

        <!-- Top Content -->
        <?php TopContent(false); ?>

        <!-- Main Page -->
        <div class="main-page-flexbox">

            <!-- Left Window -->
            <?php LeftLoginLinks(); ?>

            <!-- Right Window -->
            <div class="right-main-window">
                <div class="login-page-window">
                    <div class="login-page-content">
                        <form method="POST" action="" class="login-page-form">
                            <div>
                                <div>
                                    <label for="email">Email:</label>
                                </div>
                                <div>
                                    <input type="text" id="email" name="email" class="email-input">
                                </div>
                                <div>
                                    <label for="password">Password:</label>
                                </div>
                                <div>
                                    <input type="password" id="password" name="password" class="password-input">
                                </div>
                            </div>
                            <div class="login-buttons">
                                <div>
                                    <input type="submit" id="login" name="login" value="Login" class="lightblue-button">
                                </div>
                                <div>
                                    <?php echo DisplayLink('Register', 'pages/logout/Register.php', 'button'); ?>
                                </div>
                            </div>
                        </form>
                        <div class="login-page-text">
                            <p>If you have forgotton your password, click <?php echo DisplayLink('here', 'pages/PasswordReset.php', 'lightblue'); ?> to reset it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>

    </div>
</body>
</html>
