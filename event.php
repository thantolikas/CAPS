<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GETTING STARTED WITH BRACKETS</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="jq.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
    </head>
    <body>
		
        
            <!-- registration or username -->
            <?php include 'log-state.php'; ?>

            <!-- masthead -->
            <?php include 'masthead.php'; ?>

            <!-- navigation -->
            <?php include 'navigation.php'; ?>

            <!-- content -->
            <div class="content">
                <?php include 'find-event.php'; ?>
                <h1 class="center-title"><?php echo "$row[2]"; ?></h1>

                <div id="event-page">
                    
                    
                    <div id="event-main">
				  <h2>Details</h2>
                        <ul id="event-chars">
                            <li><?php echo "<strong>Category: </strong>" . $row[3]; ?></li>
                            <li><?php echo "<strong>Address:  </strong>" . $row[4] . " " . $row[5] . ", " . $row[7] . ", " . $row[6]; ?></li>
                            <li><?php echo "<strong>Date:  </strong>" . $row[8] . ", " . $row[9]; ?></li>
                            <li><?php echo "<strong>Recommended age group:  </strong>" . $row[10]; ?></li>
                            <li><?php echo "<strong>Optional skills:  </strong>" . $skills[2]; ?></li>
                            <?php $location = array("$row[4]", "$row[5]", "$row[7]", "$row[6]", "ΘΕΣΣΑΛΟΝΙΚΗΣ"); ?>
                        </ul>
				  <div><h2>Description</h3></div>
                        <div id="event-body"><?php echo nl2br($row[13]); ?></div>
                        
                        <div id="event-gallery">
                        <?php
                            if ($row[14] != '' && $row[15] != '') {
                                echo '<div id="carousel">';
                                    echo '<ul>';
                                        echo '<li><img src="' . $row[14] . '" /></li>';
                                        echo '<li><img src="' . $row[15] . '" /></li>';
                                        if ($row[16] != '')
                                            echo '<li><img src="' . $row[16] . '" /></li>';
                                    echo '</ul>';
                                echo '</div>';
                            }
                            else if ($row[14] != '') {
                                echo '<img src="' . $row[14] . '" />';
                            }
                                
                        ?>
                        </div>
                        
                        <h2>Where to find us</h2>
                        <div id="map-canvas"></div>
                    </div>
                    <div id="event-side">
                        
                        <a href="">
                        <div id="btnApply">
                            APPLY
                        </div></a>
                        
                        <div id="org-side">
                            <img src="<?php echo $org[10]; ?>" />
                            <div id="org-info">
                                <h3>Organisation name:</h3>
                                <?php echo '<h5><a href="organization.php?id=' . $org[0] . '">' . $org[4] . '</a></h5>'; ?>
                                <h3>Contact:</h3>
                                <?php echo '<h5>' . $org[2] . '</h5>'; ?>
                                <?php 
                                    if ($org[5] != "") {
                                        echo '<h3><a href="' . $org[5] . '">Visit our Website</a></h3>';
                                    }
                                    if ($org[6] != "") {
                                        echo '<h3><a href="' . $org[6] . '">Find us on Facebook</a></h3>';
                                    }
                                    if ($org[7] != "") {
                                        echo '<h3><a href="' . $org[7] . '">Find us on Twitter</a></h3>';
                                    }
                                    if ($org[8] != "") {
                                        echo '<h3><a href="' . $org[8] . '">Other</a></h3>';
                                    }
                                ?>
                            </div>
                        </div>

                    </div>
                
                </div>
                
                <div id="event-blanket">
                
                </div>

            </div>

            <!-- footer -->
            <?php include 'footer.php'; ?>
            
        
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(40.5831119, 22.95191360000001),
                    zoom: 13,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions);
                
                var geocoder = new google.maps.Geocoder();
                var address = <?php echo json_encode($location, JSON_UNESCAPED_UNICODE); ?>;
                address = address.toString();
                //alert(address);

                geocoder.geocode( { 'address': address}, function(results, status) {

                    if (status == google.maps.GeocoderStatus.OK) {
                        var latitude = results[0].geometry.location.lat();
                        var longitude = results[0].geometry.location.lng();
                        //alert(latitude);

                        var myLatlng = new google.maps.LatLng(latitude,longitude);
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title:"Volunteering Event"
                        });
                    } 
                }); 
                
                
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        
    </body>
</html>