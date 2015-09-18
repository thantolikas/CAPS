<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>TEAM THESSALONIKI VOLUNTEER NETWORK</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="jq.js"></script>
        <script src="form-check.js"></script>
    </head>
    <body>
	
        
        
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
                    <div class="main-title">Φόρμα εγγραφής εθελοντή</div>  
                    <h4> Παρακαλούμε συμπληρώστε τις απαραίτητες πληροφορίες</h4>
                    </div>

            <div class="aligner">

                <div id="results">
                    <ul id="res-ul"></ul>
                </div>

                <form id="form" name="vol-form">

                    <div class="label-in">
                        <div class="h3"> Όνομα: * </div>
                        <div id="err-first" class="error-message"> </div>
                        <div id="first-span" class="img-span"></div>
                        <input id="first" class="in" maxlength="50" name="first" size="30" type="text" value="" required/>
                    </div>

                    <div class="label-in">
                        <div class="h3"> Επώνυμο: * </div>
                         <div id="err-last" class="error-message"> </div>
                        <div id="last-span" class="img-span"></div>
                        <input id="last-name" class="in" maxlength="50" name="last" size="30" type="text" value="" required/>
                    </div>

                    <div class="label-in">
                        <div class="h3"> Username: * </div>
                        <div id="err-username" class="error-message"> </div>
                        <div id="username-span" class="img-span"></div>
                        <input id="username" class="in" minlength="5" maxlength="50" name="user" size="30" type="text" value="" pattern="[a-zA-Z0-9]+" required/>
                        <div id="user-span"></div>
                    </div>

                    <div class="label-in">
                        <div class="h3"> Email: * </div>
                        <div id="err-email" class="error-message"> </div>
                        <div id="email-span" class="img-span"></div>
                        
                        <input id="email" class="in" name="email" size="30" type="email" value="" required/>
                    </div>

                    <div class="label-in">
                        <div class="h3"> Password: * </div>
                         <div id="err-password" class="error-message"> </div>
                        <div id="password-span" class="img-span"></div>
                        <input id="password" class="in" minlength="10" maxlength="50" name="pass" size="30" type="password" value="" required/>
                    </div>

                    <div class="label-in">
                        <div class="h3"> Επαλήθευση password: * </div>
                        <div id="err-conf" class="error-message"> </div>
                        <div id="conf-span" class="img-span"></div>
                        <input id="con-pass" onkeyup="checkpass()" class="in" minlength="10" name="con-pass" size="30" type="password" value="" required/>
                    </div>

                    <div class="label-in">
                        <div class="h3"> Τηλέφωνο: </div>
                        <div id="err-phone" class="error-message"> </div>
                        <div id="phone-span" class="img-span"></div>
                        <input id="phone"  class="in" minlength="10" maxlength="10" name="phone" size="30" type="tel" value="" />
                    </div>

                    <div class="label-in">
                        <div class="h3"> Διεύθυνση-Οδός: </div>
                        <div id="err-addr" class="error-message"> </div>
                        <div id="addr-span" class="img-span"></div>
                        <input id="address" class="in" maxlength="50" name="address" size="30" type="text" value="" />
                    </div>

                    <div class="label-in">
                        <div class="h3"> Αριθμός οδού: </div>
                        <div id="err-str" class="error-message"> </div>
                        <div id="str-span" class="img-span"></div>
                        <input id="str"  class="in" min="1" max="9999" name="str"  type="number" value="" />
                    </div>

                    <div class="label-in">
                        <div class="h3"> Ταχυδρομικός Κώδικας: </div>
                        <div id="err-zip" class="error-message"> </div>
                        <div id="zip-span" class="img-span"></div>
                        <input id="zip"  class="in" name="zip" type="number" value="" min="10000" max="99999"/>
                    </div>

                    <div class="label-in">
                        <div class="h3"> Ημ/νία γέννησης: * </div>
                        <div id="err-dob" class="error-message"> </div>
                        <div id="dob-span" class="img-span"></div>
                        <input id="dob" class="in" name="date" required/>
                    </div>
                    
                </form>

                <p id="required">* Αυτό το πεδίο είναι απαραίτητο </p>

                 <div id="go">
                    <input type="submit" class="submitBtn" onclick="checkform()" id="sButton" name="submit" value="Εγγραφή" />
                </div> 

            </div>

            <div id="reg-blanket"></div>

        </div>

        <!-- footer -->
        <?php include 'footer.php'; ?>

   <script>     
       
       $(document).ready(function() {
           $("#dob").datepicker({
               dateFormat: "dd-mm-yy"
           });
       });
        
    </script>

    </body>
</html>