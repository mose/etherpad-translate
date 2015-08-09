<?php 
include "config.php";
include "status.php";
$status = list_status($from_lang);
echo json_encode($status);
