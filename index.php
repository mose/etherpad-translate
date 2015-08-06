<?php include 'config.php'; ?>
<html>
<head>
<title>TWVAL Translation Platform</title>
<link href="site.css" rel="stylesheet" media="all" type="text/css" title="Main stylesheet" />
</head>

<body>

<div class="header">
TVWAL Translation platform
</div>

<div class="content">

<div class="navigation">
<?php
include "nav.php";
?>
</div>

<div class="original">
<iframe class="frame" src="static_pad.php?pad=en_home"></iframe>
</div>

<div class="translated">
<iframe class="frame" src="<?php echo $epurl ?>/p/tw_home?showLineNumbers=false&showControls=false&useMonospaceFont=true&noColors=true&showChat=false"></iframe>
</div>

</div>

<div class="footer">
</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="site.js"></script>

</body>
</html>
