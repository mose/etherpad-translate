<?php 
include "status.php";
$status = list_status();
echo json_encode($status);
