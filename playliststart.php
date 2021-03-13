<?php
	require_once("config.php");
	// API for start playlist
	$url = "http://".server_ip.":".server_port."/api/?Function=StartPlayList";
	session_start();
	if($_GET['la']){
		$_SESSION['la'] = $_GET['la'];
		header('Location:'.$_SERVER['PHP_SELF']);
		exit();
	}

	switch($_SESSION['la']){
		case "hun":
			require('lang/hun.php');		
		break;
		case "eng":
			require('lang/eng.php');		
		break;
		default: 
			require('lang/'.default_lang.'.php');		
		}
?>
<html>
<head>
	<title><?=title?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><?=title?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><?=$lang['home'];?>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="scheduler.php"><?=$lang['scheduler'];?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="settings.php"><?=$lang['settings'];?></a>
      </li>
    </ul>
  </div>
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="?la=hu"><img src="img/flags/hu.png" /></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?la=eng"><img src="img/flags/england.png" /></a>
            </li>
        </ul>
    </div>
</nav>

<br /><br />

<div class="container-fluid">
	<div class="card border-primary mb-3">
	  <div class="card-header"><?=$lang['playliststart-title'];?></div>
	  <div class="card-body">
		<p class="card-text">
			<?php echo "<iframe width='1' height='1' src='$url'></iframe>"; ?>
			<?=$lang['playliststart-message'];?>
		</p>
	  </div>
	</div>

	<ol class="breadcrumb">
	  <li class="breadcrumb-item active"><a href="#">Vmix scheduler 2.0</a></li>
	  <li class="breadcrumb-item"><a href="http://crosman-web.hu">crosman-web.hu</a></li>
	</ol>
</div>

</body>
</html>