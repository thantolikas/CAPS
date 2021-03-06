<!DOCTYPE html>
<html lang="el">
	<head>
		<meta charset="utf-8">
		<!-- <meta name="google-signin-scope" content="https://www.googleapis.com/auth/plus.login" />
		<meta name="google-signin-requestvisibleactions" content="http://schema.org/AddAction" />
		<meta name="google-signin-cookiepolicy" content="single_host_origin" />
		<meta name="google-signin-clientid" content="833122714001-dpnlqanm3n5pkeqme6q0tl6pppo5uq67.apps.googleusercontent.com" /> -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Vol4All</title>
		<meta name="description" content="An interactive getting started guide for Brackets.">
		<link rel="stylesheet" href="../main.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
		<!-- <script src="https://apis.google.com/js/client:platform.js?onload=api" async defer></script> -->
		<script src="googleplus2.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://apis.google.com/js/api:client.js?onload=startApp"></script>
		<script src="jq.js"></script>
		<script src="form-check.js"></script>
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
            <div class="page-title"> 
                <div class="main-title"> Είσοδος </div>  
            </div>
				<div class="aligner">
					
					<div>
						<p>
							Δεν έχετε λογαριασμό; Η εγγραφή είναι εύκολη και γρήγορη.<a href="register.php"> Κάντε click εδώ για να ξεκινήσετε</a> »
						</p>
					</div>

					<!--<form id="form" action="log.php" target="_self" method="post" name="log-form">-->
					<form id="form" name="log-form">

						<div class="label-in">
							<div class="h3">
								Username ή Email:
							</div>
							<input class="in" maxlength="50" name="user" id="log-username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" size="25" type="text" value="" />
						</div>

						<div class="label-in">
							<div class="h3">
								Password:
							</div>
							<input class="in" maxlength="50" name="pass" id="log-password" size="25" type="password" required value="" />
						</div>

						<!--<div id="go">
						<input type="submit" class="submitBtn" name="submit" value="Go" />
						</div> -->
					</form>

					<div id="go">
						<input type="submit" class="submitBtn" onclick="getLogResponse()" id="sButton" name="submit" value="Είσοδος" />
					</div>

					<div>
						<a href="">Ξεχάσατε τον κωδικό σας;</a>
					</div>

					<div id="results">
						<ul id="res-ul"></ul>
					</div>

					<!-- SOCIAL MEDIA LOGIN -->

					<?php

					session_start();
					//define('FACEBOOK_SDK_V4_SRC_DIR', '/facebook-php-sdk-v4/src/Facebook/');
					//require __DIR__ . '/facebook-php-sdk-v4/autoload.php';

					require_once 'facebook-php-sdk-v4/src/Facebook/FacebookSession.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/FacebookSession.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/FacebookRequest.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/FacebookResponse.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/FacebookSDKException.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/FacebookRequestException.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/FacebookRedirectLoginHelper.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/FacebookAuthorizationException.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/GraphObject.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/GraphUser.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/GraphSessionInfo.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/Entities/AccessToken.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/HttpClients/FacebookCurl.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/HttpClients/FacebookHttpable.php';
					require_once 'facebook-php-sdk-v4/src/Facebook/HttpClients/FacebookCurlHttpClient.php';

					use Facebook\FacebookSession;
					use Facebook\FacebookRedirectLoginHelper;
					use Facebook\FacebookRequest;
					use Facebook\FacebookResponse;
					use Facebook\FacebookSDKException;
					use Facebook\FacebookRequestException;
					use Facebook\FacebookAuthorizationException;
					use Facebook\GraphObject;
					use Facebook\GraphUser;
					use Facebook\GraphSessionInfo;
					use Facebook\FacebookHttpable;
					use Facebook\FacebookCurlHttpClient;
					use Facebook\FacebookCurl;

					FacebookSession::setDefaultApplication('1607915839446072', 'a226b6be97f59c0f31461d5fb4bfe62f');
					$helper = new FacebookRedirectLoginHelper('http://localhost/CAPS2/fb-handle-redirect.php');
					$loginUrl = $helper -> getLoginUrl();
					?>

					<h3 style="text-align:center">Ή ΕΙΣΕΛΘΕΤΕ ΜΕΣΩ:</h3>

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

				<div id="login-blanket">

				</div>

			</div>

			<!-- footer -->
			<?php
			include 'footer.php';
			?>

		</div>

	</body>
</html>