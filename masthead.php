<div class="back"> 


<?php 
echo '<div class="masthead">';
    echo '<h1 id="title">TEAM THESSALONIKI VOLUNTEER NETWORK</h1>'; ?>

<?php

	$url = $_SERVER["REQUEST_URI"];
	if (strpos($url,'index') !== false OR trim($url) == "/CAPS/") {

 ?>

<div id="categories">
              
				<div class="cat"><img onclick="window.location= 'search-results.php?category=Healthcare'" id="hc" class="cat-img" src="images/hc-gray.png"/>
				</div>
				<div class="cat"><img onclick="window.location= 'search-results.php?category=Education'" id="edu" class="cat-img" src="images/edu-gray.png"/>
				</div>
				<div class="cat"><img onclick="window.location= 'search-results.php?category=Emergency'" id="em" class="cat-img" src="images/em-gray.png"/>
				</div>
				<div class="cat"><img onclick="window.location= 'search-results.php?category=Environment'" id="env" class="cat-img" src="images/env-gray.png"/>
				</div>
				<div class="cat"><img onclick="window.location= 'search-results.php?category=Communities'" id="com" class="cat-img" src="images/com-gray.png"/>
				</div>
				<div class="cat"><img onclick="window.location= 'search-results.php?category=Animals'" id="an" class="cat-img" src="images/an-gray.png"/>
				</div>
			</div>

<?php }echo '</div>';

?>

</div>