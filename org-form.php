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
        <script src="form-check.js"></script>
    </head>
    <body>
	
        
        <div>
        
            <!-- registration or username -->
            <?php include 'log-state.php'; ?>

            <!-- masthead -->
            <?php include 'masthead.php'; ?>

            <!-- navigation -->
            <?php include 'navigation.php'; ?>
            
            <!-- content -->
            <div class="content">
                <h1 class="center-title">Organisation registration</h1>
                
                <div class="aligner">
                    
                    <div id="results">
                        <ul id="res-ul"></ul>
                    </div>
                    
                    <form id="form" name="org-form">
                     
                        <div class="label-in">
                            <div class="h3"> Username: * </div>
                            <input id="org-username" class="in" maxlength="50" name="user" size="30" type="text" value="" />
                        </div>
                        
                        <div class="label-in">
                            <div class="h3"> Email: * </div>
                            <input id="org-email" class="in" maxlength="50" name="email" size="30" type="email" value="" />
                        </div>
                        
                        <div class="label-in">
                            <div class="h3"> Password: * </div>
                            <input id="password" class="in" maxlength="50" name="pass" size="30" type="password" value="" />
                        </div>
                        
                        <div class="label-in">
                            <div class="h3"> Confirm password: * </div>
                            <input id="con-pass" onkeyup="checkpass()" class="in" maxlength="50" name="con-pass" size="30" type="password" value="" />
                            <div id="pass-span"></div>
                        </div>
                        
                        <div class="label-in">
                            <div class="h3"> Organisation name: * </div>
                            <input id="org-name" class="in" maxlength="50" name="name" size="30" type="text" value="" />
                        </div>
                        
                        <div class="label-in">
                            <div class="h3">Website: </div>
                            <input id="website" class="in" maxlength="50" name="website" size="30" type="url" value="" />
                        </div>
                        
                        <div class="label-in">
                            <div class="h3">  Facebook: </div>
                            <input id="facebook" class="in" maxlength="50" name="facebook" size="30" type="url" value="" />
                        </div>
                        
                        <div class="label-in">
                            <div class="h3"> Twitter: </div>
                            <input id="twitter" class="in" maxlength="50" name="twitter" size="30" type="url" value="" />
                        </div>
                        
                        <div class="label-in">
                            <div class="h3">  Other: </div>
                            <input id="other" class="in" maxlength="50" name="other" size="30" type="url" value="" />
                        </div>
                         
                        <div class="label-in">
                            <div class="h3">  Organisation description: * </div>
                            <textarea id="description" class="for-text-area" cols="55" name="description" maxlength="500" rows="10" ></textarea>
                        </div>
                        
                    </form>
                    
                    <p id="required">* This field is required </p>
                    
                    <div id="go">
                        <input type="submit" class="submitBtn" onclick="checkorgform()" id="sButton" name="submit" value="Register" />
                    </div> 
                    
                </div>
                
                <div id="reg-blanket"></div>
                
            </div>
            
            <!-- footer -->
            <?php include 'footer.php'; ?>
            
        </div>
       
    </body>
    
   
</html>