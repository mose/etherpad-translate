<ul class="nav">
<?php
include 'config.php';
include 'status.php';
include 'etherpad.lib.php';
$ep = new EtherpadLiteClient($apikey);

$pads = $ep->listAllPads();
$status = list_status();

$list = array_diff(array_values($pads->padIDs), array("en_home"));
array_unshift($list, 'en_home');
foreach ($list as $pad) {
  if (substr($pad, 0, 2) == 'en')  {
    if (!isset($status[$pad])) {
      $status[$pad] = 0;
      update_status($pad, 0);
    }
    echo "<li data-pad=\"$pad\" class=\"status" . $status[$pad] . "\">".substr($pad, 3)."</li>";
  }
}
?>
</ul>
