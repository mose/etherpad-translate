<html>
<style>
body {
  padding: 0 10px;
  font-family: monospace;
  line-height: 16px;
  font-size: 12px;
}
ul, ol, li {
  margin: 0;
  padding: 0;
}
ul {
  margin-left: 1.5em;
}
</style>
<body>
<?php
include 'config.php';
include 'etherpad.lib.php';
$ep = new EtherpadLiteClient($apikey);

$pad = preg_replace("/[^-_a-z0-9]/i", "", $_GET['pad']);
echo $ep->getHTML($pad)->html;
?>
</body>
</html>
