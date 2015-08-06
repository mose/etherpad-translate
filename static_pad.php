<?php
include 'config.php';
include 'etherpad.lib.php';
$ep = new EtherpadLiteClient($apikey);

$pad = preg_replace("/[^-_a-z0-9]/i", "", $_GET['pad']);
echo $ep->getHTML($pad)->html;
