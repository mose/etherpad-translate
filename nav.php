<ul class="nav">
<?php
include 'config.php';
include 'etherpad.lib.php';
$ep = new EtherpadLiteClient($apikey);

#print_r($ep->createGroup());
#var_dump($ep->createGroupPad($group_en, "en_help", "test text"));
$pads = $ep->listAllPads();
foreach ($pads->padIDs as $pad) {
  if (substr($pad, 0, 2) == 'en') {
    echo "<li data-pad=\"$pad\">".substr($pad, 3)."</li>";
  }
}
?>
</ul>
