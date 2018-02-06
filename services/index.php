<?php
include '../common/configuration.php';
include '../model/database.php';
include '../model/requests_db.php';

$requests = getRequests('In Progress');
sort($requests);

include 'request_list.php';
exit();

?>
