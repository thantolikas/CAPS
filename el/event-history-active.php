<?php
    
include 'create-link.php';

$org_id = $_SESSION['org_id'];

$query = "SELECT * FROM events WHERE org_id = '$org_id' AND status = '1' ORDER BY id desc";
$results = mysqli_query($link,$query);

while ($row = mysqli_fetch_row($results)) {
    echo '<div class="history-event">';
    echo '<h3>' . $row[2] . '</h3>';
    echo '<p>' . $row[12] . '</p>';
    echo '<h5>Κατηγορία: ' . $row[3] . '</h5>';
    echo '<h5>Ημερομηνία: ' . $row[8] . '</h5>';
    echo '<h5>Περιοχή: ' . $row[7] . '</h5>';
    echo '<div class="history-event-links">';
    echo '<a href="update-event.php?id=' . $row[0] . '">Επεξεργασία &raquo;</a>';
    echo '<a href="event.php?id=' . $row[0] . '">Περισσότερα &raquo;</a>';
    echo '</div>';
    echo '</div>';
}
    
@mysqli_close($link);

?>