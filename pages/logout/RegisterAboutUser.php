<?php 
    $_PATH = '/projects/thefacebook/functions/scripts/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'content.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'session-handler.php';
    
    session_start();
    CheckTraversal();
    LoggedOutSession('/pages/logout/RegisterAboutUser.php');
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
                    <form method="POST" action="">
                        <div class="about-you-grid">
                            <div>
                                <p><b>Basic Info:</b></p>
                            </div>
                            <div></div>
                            <div>
                                <label for="first-name-input">First Name:</label>
                            </div>
                            <div>
                                <input type="text" id="first-name-input" name="first-name" required>
                            </div>
                            <div>
                                <label for="last-name-input">Last Name:</label>
                            </div>
                            <div>
                                <input type="text" id="last-name-input" name="last-name" required>
                            </div>
                            <div>
                                <label for="sex-input">Sex:</label>
                            </div>
                            <div>
                                <select id="sex-input", name="sex">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Rather not say</option>
                                </select>
                            </div>
                            <div>
                                <label for="birthday">Birthday:</label>
                            </div>
                            <div>
                                <input type="date" id="birthday-input" name="birthday">
                            </div>
                            <div>
                                <label for="home-address-input">Home Address:</label>
                            </div>
                            <div>
                                <input type="text" id="home-address-input" name="home-address">
                            </div>
                            <div>
                                <label for="home-town-input">Home Town:</label>
                            </div>
                            <div>
                                <input type="text" id="home-town-input" name="home-town">
                            </div>
                            <div>
                                <label for="highschool-input">High School:</label>
                            </div>
                            <div>
                                <input type="text" id="highschool-input" name="highschool">
                            </div>
                            <div>
                                <label for="mobile-input">Mobile:</label>
                            </div>
                            <div>
                                <input type="text" id="mobile-input" name="mobile">
                            </div>
                            <div>
                                <label for="website-input">Website:</label>
                            </div>
                            <div>
                                <input type="url" id="website-input" name="website">
                            </div>
                            <div>
                                <p><b>Personal Info:</b></p>
                            </div>
                            <div></div>
                            <div>
                                <label for="looking-for-input">Looking For:</label>
                            </div>
                            <div>
                                <select id="looking-for-input" name="looking-for">
                                    <option>Friendship</option>
                                    <option>A Relationship</option>
                                </select>
                            </div>
                            <div>
                                <label for="interested-in-input">Interested In:</label>
                            </div>
                            <div>
                                <select id="interested-in-input" name="interested-in">
                                    <option>Men</option>
                                    <option>Women</option>
                                </select>
                            </div>
                            <div>
                                <label for="relationship-status-input">Relationship Status:</label>
                            </div>
                            <div>   
                                <input type="text" id="relationship-status-input" name="relationship-status">
                            </div>
                            <div>
                                <label for="political-views-input">Political Views:</label>
                            </div>
                            <div>
                                <input type="text" id="political-views-input" name="political-views">
                            </div>
                            <div>
                                <label for="interests-input">Interests:</label>
                            </div>
                            <div>
                                <textarea id="interests-input" name="interests" rows=3></textarea>
                            </div>
                            <div>
                                <label for="favorite-music-input">Favorite Music:</label>
                            </div>
                            <div>
                                <textarea id="favorite-music-input" name="favorite-music" rows=3></textarea>
                            </div>
                            <div>
                                <label for="favorite-movies-input">Favorite Movies:</label>
                            </div>
                            <div>
                                <textarea id="favorite-movies-input" name="favorite-movies" rows=3></textarea>
                            </div>
                            <div>
                                <label for="about-me-input">About Me:</label>
                            </div>
                            <div>
                                <textarea id="about-me-input" name="about-me" rows=3></textarea>
                            </div>
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