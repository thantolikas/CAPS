<?php
    
    include 'create-link.php';

    $id = $_GET["id"];

    $query = "SELECT * FROM organisations WHERE org_id = '$id'";
    $results = mysqli_query($link,$query);
    $org = mysqli_fetch_row($results);

    @mysqli_close($link);

?>