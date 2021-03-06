<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Vol4All Admin</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="form-check.js"></script>
        <script src="jq.js"> </script>
    </head>
    <body>

        <?php 

        session_start();

        mysqli_set_charset($link, "utf8");

        if (!isset($_SESSION['admin'])) { 
        
        ?>

        <div class="aligner">
            <form id="admin-form" name="log-form">

                <div class="label-in">
                    <div class="h3">
                        Username:
                    </div>
                    <input class="in" maxlength="50" name="user" id="log-username" size="25" type="text" value="" />
                </div>

                <div class="label-in">
                    <div class="h3">
                        Password:
                    </div>
                    <input class="in" maxlength="50" name="pass" id="log-password" size="25" type="password" required value="" />
                </div>

            </form>

            <div id="go">
                <input type="submit" class="submitBtn" onclick="getLogResponse()" id="sButton" name="submit" value="Είσοδος" />
            </div>

            <div id="results">
                <ul id="res-ul"></ul>
            </div>

        </div>

        <?php } else { ?>

        <!-- masthead -->
        
        <div class="center-title"> <h3>ADMIN CONTROL PANEL</h3> </div>

        <!-- navigation -->
        <?php include 'navigation.php'; ?>

        <!-- content -->
        <div class="content">
            <div class="aligner">
                <h1> Οργανισμοί </h1>

                <div class="listplz">  

                    <?php 

                    include "create-link.php";

                    $query =" SELECT * FROM organisations";
                    $results = mysqli_query($link,$query);

                    while ($row = mysqli_fetch_row($results)) { 

                    ?>

                    <div class="listitem"> 

                        <table> 
                            <tr> 
                                <th>ID</th>
                                <th>Username </th>
                                <th>Email </th>
                                <th>Όνομα </th>
                                <th>Website </th>
                                <th>Facebook </th>
                                <th>Twitter </th>
                                <th>Άλλο </th>
                                <th>Περιγραφή</th>
                                <th>Actions</th>
                            </tr>

                            <tr> 
                                <td class="info-id"> <?php echo $row[0]; ?></td>
                                <td class="info"><?php echo $row[1]; ?> </td>
                                <td class="info"><?php echo $row[2]; ?> </td>
                                <td class="info"><?php echo $row[4]; ?>  </td>
                                <td class="link"><a href="<?php echo $row[5];?>">Link</a></td>
                                <td class="link"><a href="<?php echo $row[6];?>">Link</a> </td>
                                <td class="link"><a href="<?php echo $row[7];?>">Link</a></td>
                                <td class="link"><a href="<?php echo $row[8];?>">Link</a></td>
                                <td class="link"><a href="../organization.php?id=<?php echo $row[0];?>">Link</a></td>
                                <td class='actions'><span onclick="ondelete('org', <?php echo $row[0]; ?>)">Διαγραφή</span> <span onclick="window.location = 'mailto-form.php?mailToOrganization=<?php echo $row[0] ?>'">Mailto</span></td>
                            </tr>

                        </table>

                    </div>


                    <?php } ?>

                </div>

                <h1> Εθελοντές </h1>

                <div class="listplz">   

                    <?php 

                    include "create-link.php";

                    $query =" SELECT * FROM user";
                    $results = mysqli_query($link,$query);

                    while ($row = mysqli_fetch_row($results)) { 

                    ?>

                    <div class="listitem"> 

                        <table>

                            <tr> 
                                <th>ID</th>
                                <th>Όνομα </th>
                                <th>Επώνυμο </th>
                                <th>Username </th>
                                <th>Email </th>
                                <th>Τηλέφωνο </th>
                                <th>Διεύθυνση </th>
                                <th>Ημ/νία γέννησης </th>
                                <th>Actions</th>
                            </tr>

                            <tr> 
                                <td class="info-id"> <?php echo $row[0]; ?></td>
                                <td class="info"><?php echo $row[1]; ?> </td>
                                <td class="info"><?php echo $row[2]; ?> </td>
                                <td class="info"><?php echo $row[3]; ?>  </td>
                                <td class="info"><?php echo $row[4];?></td>
                                <td class="info"><?php echo $row[6];?></td>
                                <td class="info"><?php echo $row[7] . " " . $row[8] . ", " . $row[9]; ?></td>
                                <td class="info"><?php echo $row[11];?></td>
                                <td class='actions'><span onclick="ondelete('vol', <?php echo $row[0]; ?>)">Διαγραφή</span> <span onclick="window.location = 'mailto-form.php?mailToVolunteer=<?php echo $row[0] ?>'">Mailto</span></td>
                            </tr>

                        </table>

                    </div>


                    <?php } ?>

                </div>

                <div id="home-blanket">

                </div>
            </div>
        </div>

        <?php } ?>
        
    </body>

</html>