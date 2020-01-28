<?php
session_start();
include_once('dbController.php');
$db_handle = new DBController();
$applicantUsername = $_SESSION['username'];
$applicationId = $_POST['applicationId'];
mkdir('../data/applications/' . $applicationId);
$query = "SELECT * FROM applicationsubmitted where applicationID = '$applicationId'";
$count = $db_handle->numRows($query);
if ($count == 0) {
    $anotherquery = "INSERT INTO applicationsubmitted (applicationID,useremail) VALUES ('$applicationId','$applicantUsername')";
    $current_id = $db_handle->insertQuery($anotherquery);
    if ($current_id == "success") {
        echo "success";
    }
}
