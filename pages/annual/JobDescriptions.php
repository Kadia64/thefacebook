<?php 
    $_PATH = '/projects/thefacebook/functions/scripts/';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'content.php';
    require_once $_SERVER['DOCUMENT_ROOT'].$_PATH.'session-handler.php';
    
    session_start();
    CheckTraversal();
    CheckLoggedOutSessionID('/pages/annual/JobDescriptions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php HeaderInfo('Job Descriptions'); ?>
    <?php echo GetPageCSS('job_descriptions'); ?>
    <style>
        .job-descriptions-page-window {
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
                <?php WindowText('Thefacebook Jobs'); ?>
                <h4>[ Job Descriptions ]</h4>
                <div class="job-descriptions-page-window">                    
                </div>
            </div>

        </div>

        <!-- Bottom Links -->
        <?php BottomContent(); ?>        

    </div>
</body>
</html>