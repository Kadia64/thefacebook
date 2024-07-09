<?php 
    $_PATH = '/projects/thefacebook/functions/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'scripts/content.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'scripts/session-handler.php';
    
    session_start();
    CheckTraversal();
    LoggedOutSession('/pages/logout/Register.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php HeaderInfo('Register'); ?>
    <?php echo GetPageCSS('register'); ?>
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
                <?php WindowText('Registration'); ?>

                <div class="register-page-window">
                    <div class="register-page-content">
                        <p>To register for the facebook.com, just fill out the four fields below. You will have a chance to enter additional information and submit a picture once you have registered.</p>
                        <div class="register-page-form">
                            <form method="POST" action="<?php echo $_PATH.'session-registration.php'; ?>">
                                <div class="register-page-grid">
                                    <div>
                                        <label>Username:</label>
                                    </div>
                                    <div>
                                        <input type="text" id="username" name="username" class="register-page-username" required>
                                    </div>
                                    <div>
                                        <label for="education-status">Status:</label>
                                    </div>
                                    <div>
                                        <select id="education-status" name="education-status" class="register-education-status-input" required>
                                            <option>Student</option>
                                            <option>Grad-Student</option>
                                            <option>Alumnus/Alumna</option>
                                            <option>Faculty</option>
                                            <option>Staff</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label>Email: (choose)</label>
                                    </div>
                                    <div>
                                        <input type="email" id="email" name="email" class="register-email-input" required>
                                    </div>
                                    <div>
                                        <label>Password*: (choose)</label>
                                    </div>
                                    <div>
                                        <input type="password" id="password" name="password" class="register-password-input" required>
                                    </div>
                                </div>
                                <div class="register-page-bottom-box">
                                    <div class="register-page-terms-box">
                                        <input type="checkbox" id="terms" name="terms" class="register-terms-input">
                                        <p>I have read and understood the <?php echo DisplayLink('Terms of Use', '/pages/annual/Terms.php', 'lightblue'); ?>, and I agree to them.</p>
                                    </div>
                                    <div>
                                        <p>*</p>
                                        <p>You can choose any password. It does not have to be, and should not be your school password.</p>
                                    </div>
                                </div>
                                <div class="register-page-button">
                                    <input type="submit" id="register-button" name="register-button" value="Register" class="lightblue-button">
                                </div>
                            </form>
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