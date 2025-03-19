<?php 
    $_PATH = '/projects/thefacebook/functions/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'scripts/content.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'scripts/session-handler.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'scripts/account-manager.php';

    
    
    session_start();
    CheckTraversal();
    CheckLoggedOutSessionID('/pages/logout/RegisterAboutUser.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php HeaderInfo('About You'); ?>
    <?php echo GetPageCSS('register_about'); ?>
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
                <?php WindowText('About You'); ?>
                <div class="about-you-window">
                    <div class="about-you-text">
                        <p>Registering with us is quick and easy. Simply fill out the form below to create your account. Once you've completed the registration process, you'll have access to all the features and benefits of being a member of our community.</p>
                    </div>
                    <form method="POST" action="<?php echo $_PATH.'register-user.php'; ?>">
                        <div class="about-you-grid">
                            <?php 

                                DisplayRegisterAboutForm();
                            ?>                       
                        </div>
                        <div class="about-you-register-button">
                            <input type="submit" class="lightblue-button" value="Register Now!">
                        </div>
                    </form>
                </div>

            </div>

        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>        

    </div>
</body>
</html>