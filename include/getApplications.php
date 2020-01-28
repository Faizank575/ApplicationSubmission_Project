<?php
require_once("dbController.php");
$db_handle = new DBController();
$username = $_POST['username'];
$Applications = "SELECT applicationID,applicantName FROM applicationsubmitted WHERE useremail='$username'";
$result = $db_handle->numRows($Applications);
if ($result > 0) {
    $result = $db_handle->runQuery($Applications);
    $application = '';
    foreach ($result as $ApplicationData) {
        $application .= ' <li class="list-group-item d-flex justify-content-between align-items-center">';
        $application .= $ApplicationData['applicantName'] . ' ' . $ApplicationData['applicationID'];
        $application .= '<span class="badge badge-primary badge-pill"><a class="btn btn-primary" role="button" href="./ApplicationDetails.php?applicationID=' . $ApplicationData['applicationID'] . '">View Application</a></span></li>';
    }

    echo $application;
}
