<?php
    
include '../back-end/create-link.php';

$org_id = $_SESSION['org_id'];

mysqli_set_charset($link, "utf8");

$query = "SELECT * FROM events WHERE org_id = '$org_id'";
$results = mysqli_query($link,$query);

while ($row = mysqli_fetch_row($results)) {
    echo '<div class="history-event">';
    echo '<h3>' . $row[2] . '</h3>';
    echo '<p>' . $row[12] . '</p>';
    $queryOrg = "SELECT name FROM organisations WHERE id = '$org_id'";
    $orgResults = mysqli_query($link,$queryOrg);
    $org = mysqli_fetch_row($orgResults);
    echo '<h5>Καταχωρημένο από: ' . $org[0] . '</h5>';
    echo '<h5>Κατηγορία: ' . $row[3] . '</h5>';
    echo '<h5>Ημερομηνία: ' . $row[8] . '</h5>';
    echo '<h5>Περιοχή: ' . $row[7] . '</h5>';
    echo '<a href="event.php?id=' . $row[0] . '">Περισσότερα &raquo;</a>';
    echo '</div>';
}
    
@mysqli_close($link);

?>