<?php

function update_status($pad, $status) {
  $fp = fopen("statuses/$pad", 'w');
  fputs($fp, $status);
  fclose($fp);
}

function list_status() {
  $back = array();
  foreach (glob("statuses/en_*") as $f) {
    $pad = basename($f);
    $back[$pad] = file_get_contents($f);
  }
  return $back;
}

if (!empty($_POST['status']) and !empty($_POST['pad'])) {
  $status = preg_replace('/[^0-9]/', '', $_POST['status']);
  $pad = preg_replace("/[^-_a-z0-9]/i", "", $_POST['pad']);
  update_status($pad, $status);
}
