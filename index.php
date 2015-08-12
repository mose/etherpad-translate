<?php include 'config.php'; ?>
<html>
<head>
<title><?php echo $site_title; ?></title>
<link href="style.css" rel="stylesheet" media="all" type="text/css" title="Main stylesheet" />
</head>

<body>

<div class="header">
<div class="wrapper">
<a href="index.php" class="title"><?php echo $site_title; ?></a>
<div class="status">
<div class="page">
<?php echo $homepage; ?>
</div>
<div class="buttons">
<span class="status0">TODO</span>
<span class="status1">WIP</span>
<span class="status2">DONE</span>
</div>
</div>
<span class="glossary">
glossary
</span>
</div>
</div>

<div class="content">

<div class="glossary-panel">
<iframe class="frame" src="static_pad.php?pad=glossary"></iframe>
</div>

<div class="navigation">
<?php include "nav.php"; ?>
</div>

<div class="original">
<iframe class="frame" src="static_pad.php?pad=<?php echo $homepad; ?>"></iframe>
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
