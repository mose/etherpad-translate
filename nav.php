<ul class="nav">
<li data-pad="en_home" class="focus">home</li>
<?php
include 'config.php';
include 'status.php';
include 'etherpad.lib.php';
$ep = new EtherpadLiteClient($apikey);

$pads = $ep->listAllPads();
$status = list_status();

foreach ($pads->padIDs as $pad) {
  if (substr($pad, 0, 2) == 'en' && $pad != "en_home")  {
    if (empty($status[$pad])) {
      $status[$pad] = 0;
      update_status($pad, 0);
    }
    echo "<li data-pad=\"$pad\" class=\"status" . $status[$pad] . "\">".substr($pad, 3)."</li>";
  }
}
?>
</ul>
