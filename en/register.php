<!DOCTYPE html>
<html lang="el">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Vol4All</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="../main.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="jq.js"></script>
    </head>
    <body>
        
        <?php 

        session_start();

        if (isset($_SESSION['user'])) {
            header("Location: index.php");
        }

        ?>
        
        <div>
        
        <!-- registration or username -->
        <?php //include 'log-state.php'; ?>

        <!-- navigation -->
         <?php include 'navigation.php'; ?>
        <h1 class="center-title"></h1>

        <!-- masthead -->
        <?php include 'masthead.php'; ?>

        <!-- content -->
        <div class="content">
            <h1 class="center-title"></h1>
                
            <div>
                <div class="page-title"> 
                    <div class="main-title"> Register </div>  
                    <h4>Become a member and help your city!</h4>
                </div>

                <div class="aligner row">
                    <h2>I want to be a volunteer</h2>
                    <div id="btnReg">
                        <h3><a href="vol-form.php">Register as a volunteer!</a></h3>
                    </div>
                </div>

                <div class="aligner row">
                    <h2>My organization is looking for help</h2>
                    <div id="btnReg">
                        <h3><a href="org-form.php">Register as an organization</a></h3>
                    </div>
                </div>

                <h3 style="text-align:center">OR LOGIN VIA(ONLY FOR VOLUNTEERS):</h3>

                <div class="social-buttons">

                    <div class="social-container">
                        <h4>Facebook</h4>
                        <div class="social-login" onclick="window.location = '<?php echo $loginUrl ?>'" id="fb"></div>
                    </div>

                    <div class="social-container">
                        <h4>Twitter</h4>
                        <div class="social-login" onclick="window.location = 'twitter-login2.php'" id="tweet"></div>
                    </div>

                    <div class="social-container">
                        <h4>Google+</h4>
                        <div class="social-login" id="googleplus"></div>
                    </div>

                </div>

            </div>

            <div id="register-blanket">

            </div>
                
        </div>
            
        <!-- footer -->
        <?php include 'footer.php'; ?>
            
        </div>
       
    </body>
</html>