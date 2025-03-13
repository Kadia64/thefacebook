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
        .annual-page-window:last-child {
            margin-bottom: 20px;
        }
        .annual-page-extra ul {
            margin-left: -15px;
            margin-top: -5px;
            margin-bottom: 5px;
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

                    <div class="annual-page-extra">
                        <ul>
                            <li><a href="#1" class="lightblue-link">What is Thefacebook?</a></li>
                            <li><a href="#2" class="lightblue-link">How do you get our information? Does the school give it to you?</a></li>
                            <li><a href="#3" class="lightblue-link">How can I protect my privacy?</a></li>
                            <li><a href="#4" class="lightblue-link">What is the social net?</a></li>
                            <li><a href="#5" class="lightblue-link">Why does the social net repeat people?</a></li>
                            <li><a href="#6" class="lightblue-link">How do I search for something besides names?</a></li>
                            <li><a href="#7" class="lightblue-link">If I reject someone, will they find out?</a></li>
                            <li><a href="#8" class="lightblue-link">How can I view the visualization?</a></li>                            
                            <li><a href="#9" class="lightblue-link">Why is the visualization slow?</a></li>
                            <li><a href="#10" class="lightblue-link">Can I change my name and password?</a></li>
                            <li><a href="#11" class="lightblue-link">My old picture keeps showing up. Why is this?</a></li>
                            <li><a href="#12" class="lightblue-link">When I try to log in, the page just refreshes. What\'s going on?</a></li>
                            <li><a href="#13" class="lightblue-link">What is poking?</a></li>
                            <li><a href="#14" class="lightblue-link">Who made this site?</a></li>
                            <li><a href="#15" class="lightblue-link">When was the site started?</a></li>
                            <li><a href="#16" class="lightblue-link">Is this a class project?</a></li>
                            <li><a href="#17" class="lightblue-link">What kind of graph theory algorithms are you using to process connections?</a></li>
                            <li><a href="#18" class="lightblue-link">I have a question that\'s not covered in the FAQ. How can I ask it?</a></li>
                        </ul>
                    </div>

                    <?php
                        AnnualPageWindow('What is Thefacebook?', "Thefacebook is an online directory that connects people through social networks at colleges and universities.", 1);
                        AnnualPageWindow('How do you get our information? Does the school give it to you?', "Your school is not providing us with any information about you. All information and pictures are provided voluntarily by users.", 2);
                        AnnualPageWindow('How can I protect my privacy?', 'You can adjust your <a href="" class="lightblue-link">privacy settings</a> to allow only people within certain divisions of certain schools to see it. You can also set it so that only people who share something in common with you (eg. house, year, a course, friends) can see your information. And further, you can create different privacy settings for the four different parts of your profile: contact information, personal information, courses and friends.', 3);
                        AnnualPageWindow('What is the social net?', 'Your <a href="" class="lightblue-link">social net</a> is the group of all users whose privacy settings allow you to view their information. To make things more interesting, we also limit it to only users who have submitted pictures. When you click on "social net", ten random users from your social net are displayed.', 4);
                        AnnualPageWindow('Why does the social net repeat people?', "Since the selection of who is displayed is random, there is a chance that the same person will be displayed on two pages. This problem will alleviate itself as more people join.", 5);
                        AnnualPageWindow('How do I search for something besides names?', 'You can either click on the "Search all Fields" button on the <a href="" class="lightblue-link">search</a> page, or try the <a href="" class="lightblue-link">advanced search</a> page.', 6);
                        AnnualPageWindow('If I reject someone, will they find out?', "No. When you reject someone, their friend request will leave your list of friendships to confirm, but they will not be notified. They also will not be able to send you another friend request for some amount of time, so to them, it will just seem as if you haven't confirmed their friendship yet.", 7);
                        AnnualPageWindow('How can I view the visualization?', 'In order to see the visualized social nets, you need to have the svg plugin for your browser. Installation takes about 15 seconds; you can get it <a href="" class="lightblue-link">here</a>.', 8);
                        AnnualPageWindow('Why is the visualization slow?', 'Every time you view a visualization, we need to figure ouur wheather you have the appropriate privileges to see each person on the graph. This takes time. In addition, in order to maintain the overall performance of the rest of the site, we have set up the site to proceess other requests with a higher priority than requests to generate the visualizations.', 9);
                        AnnualPageWindow('Can I change my name and password?', 'Yes - you can request a name change and change your password on your <a href="" class="lightblue-link">my account</a> page. For quality control purposes, we confirm all name changes before they take place. Password changes take effect immediately.', 10);
                        AnnualPageWindow('My old picture keeps showing up. Why is this?', "This is due to your browser caching images to improve display time. Hold down CTRL while reloading the page to force the browser to refresh the image.", 11);
                        AnnualPageWindow('When I try to log in, the page just refreshes. What\'s going on?', "You need to enable cookies on your browser. In order to do this in Internet Explorer, go to tools: options from the menu at the top. Then click on the privacy tab and alter your privacy settings to allow cookies. Finally, close and restart your browser and try logging in again.", 12);
                        AnnualPageWindow('What is poking?', "We have about as much of an idea as you do. We thought it would be fun to make a feature that has no specific purpose and to see what happens from there. So mess around with it, because you're not getting an explination from us.", 13);
                        AnnualPageWindow('Who made this site?', 'See the <a href="" class="lightblue-link">about</a> page.', 14);
                        AnnualPageWindow('When was the site started?', "It was launched to the public on Wednesday, February 4th, 2004.", 15);
                        AnnualPageWindow('Is this a class project?', "Nope, just for fun.", 16);
                        AnnualPageWindow('What kind of graph theory algorithms are you using to process connections?', "I'm going to pretend you didn't just ask that.", 17);
                        AnnualPageWindow('I have a question that\'s not covered in the FAQ. How can I ask it?', '<a href="" class="lightblue-link">Email us</a>.', 18);
                    ?>

                </div>
            </div>

        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>        

    </div>
</body>
</html>