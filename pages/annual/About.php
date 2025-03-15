<?php 
    $_PATH = '/projects/thefacebook/functions/scripts/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'content.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'session-handler.php';
    
    session_start();
    CheckTraversal();
    CheckLoggedOutSessionID('/pages/annual/About.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php HeaderInfo('About'); ?>
    <?php echo GetPageCSS('about'); ?>
    <style>
        .about-page-window {
            margin: 0 auto;
            width: calc(var(--page-width) - 210px);
        }
        .about-page-window:last-child {
            margin-bottom: 20px;
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

                    <?php AnnualPageWindow("The Project", "Thefacebook is an online directory that connects people through social networks at colleges and universities."); ?>

                    <div class="annual-page-window">
                        <table>
                            <tr>
                                <th><a href="" class="lightblue-link">Mark Zuckerberg</a></th>
                                <th>Founder, Master and Commander, Enemy of the State.</th>                                
                            </tr>                            
                            <tr>
                                <th><a href="" class="lightblue-link">Eduardo Saverin</a></th>
                                <th>Business Stuff, Corporate Stuff, Brazillian Affairs.</th>
                            </tr>
                            <tr>
                                <th><a href="" class="lightblue-link">Dustin Moskovitz</a></th>
                                <th>No Longer Expendable Programmer, Paid Assassin.</th>
                            </tr>
                            <tr>
                                <th><a href="" class="lightblue-link">Andrew McCollum</th>
                                <th>Graphic Art, General Rockstar</th>
                            </tr>
                            <tr>
                                <th><a href="" class="lightblue-link">Chris Hughes</a></th>
                                <th>The Secret Weapon.</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th><a href="" class="lightblue-link">Contact us.</a></th>
                                <th></th>
                            </tr>
                        </table>
                    </div>

                    <div class="annual-page-window">
                        <?php WindowText("News Coverage"); ?>
                        <ul>
                            <li>[ New York Times ]</li>
                            <li><a href="" class="lightblue-link">Are We a Match?</a></li><br>
                            <li>[ CNN.com ]</li>
                            <li><a href="" class="lightblue-link">Daring to date across party lines</a></li><br>
                            <li>[ The Crhonicle of Higher Education ]</li>
                            <li><a href="" class="lightblue-link">Friends, Digitally</a></li><br>
                            <li>[ The Harvard Crimson ]</li>
                            <li><a href="" class="lightblue-link">Sociology of thefacebook.com</a></li>
                            <li><a href="" class="lightblue-link">Manifest Destiny, Facebook Style</a></li>
                            <li><a href="" class="lightblue-link">Columbia Rebukes thefacebook.com</a></li>
                            <li><a href="" class="lightblue-link">Facebook Expands Beyond Harvard</a></li>
                            <li><a href="" class="lightblue-link">Harvard Bonds on Facebook Website</a></li>
                            <li><a href="" class="lightblue-link">Show Your Best Face</a></li>
                            <li><a href="" class="lightblue-link">Hundreds Register for New Facebook Website</a></li><br>
                            <li>[ The Harvard Independent ]</li>
                            <li><a href="" class="lightblue-link">Face to Face</a></li><br>
                            <li>[ The Stanford Daily ]</li>
                            <li><a href="" class="lightblue-link">Thefacebook.com for dummies</a></li>
                            <li><a href="" class="lightblue-link">Thefacebook.com's darker side</a></li>
                            <li><a href="" class="lightblue-link">All the cool kids are doing it</a></li><br>
                            <li>[ The Columbia Spectator ]</li>
                            <li><a href="" class="lightblue-link">CU, Harvard Sites End 'E-War'</a></li>
                            <li><a href="" class="lightblue-link">New Harvard-Based Facebook Adds Columbia To Database</a></li><br>
                            <li>[ The Dartmouth ]</li>
                            <li><a href="" class="lightblue-link">Online facebook sees no end in sight for growth</a></li>
                            <li><a href="" class="lightblue-link">The Fashion Statement: 'Face It'</a></li>
                            <li><a href="" class="lightblue-link">Students flock to web-based facebook</a></li><br>
                            <li>[ The Cornell Daily Sun</li>
                            <li><a href="" class="lightblue-link">Facebook Connects C.U.</a></li><br>
                            <li>[ The Daily Pennsylvanian ]</li>
                            <li><a href="" class="lightblue-link">Students flock to join college online facebook</a></li><br>
                            <li>[ The Daily Free Press (BU) ]</li>
                            <li><a href="" class="lightblue-link">BU newest addition to thefacebook.com</a></li><br>
                            <li>[ The Brown Daily Herald ]</li>
                            <li><a href="" class="lightblue-link">Privacy settings on Thefacebook.com allow users to maintain security</a></li>
                            <li><a href="" class="lightblue-link">Harvard online facebook service plans to hook up Brown students</a></li><br>
                            <li>[ The Yale Herald ]</li>
                            <li><a href="" class="lightblue-link">Harvard facebook website now includes Yale</a></li><br>
                            <li>[ The Daily Princetonian ]</li>
                            <li><a href="" class="lightblue-link">The quest for friends - thefacebook.com</a></li>
                            <li><a href="" class="lightblue-link">Students to connect through web facebook</a></li><br>
                            <li>[ The Marquette Tribune ]</li>
                            <li><a href="" class="lightblue-link"></a>'Facebook' popular on campuses</li><br>
                            <li>[ The Chronicle Duke ]</li>
                            <li><a href="" class="lightblue-link">Thefacebook.com opens to Duke students</a></li><br>
                            <li>[ The Hoya ]</li>
                            <li><a href="" class="lightblue-link">www.thefacebook.com</a></li><br>
                            <li>[ The Daily Californian (Berkeley) ]</li>
                            <li><a href="" class="lightblue-link">Putting Your Best Face Forward</a></li><br>
                            <li>[ The Daily Northwestern ]</li>
                            <li><a href="" class="lightblue-link">Face It</a></li><br>
                            <li>[ The Heights (Boston College) ]</li>
                            <li><a href="" class="lightblue-link">Thefacebook aids in making friends and procrastinating</a></li><br>
                            <li>[ The Chicago Maroon ]</li>
                            <li><a href="" class="lightblue-link">Facebook defies utilitarianism, insults Mill</a></li>
                            <li><a href="" class="lightblue-link">Social website draws heavy traffic</a></li>
                            <li><a href="" class="lightblue-link">Facebook is the greatest thing since Marx</a></li>
                            <li><a href="" class="lightblue-link">U of C connects to new social website</a></li>                            
                        </ul>
                    </div>

                </div>
                    <div class="about-page-home-button">
                        <?php echo DisplayLink("Home", "", "button"); ?>
                    </div>
            </div>

        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>

    </div>
</body>
</html>