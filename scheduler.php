<?php
	require_once("config.php");
	$datum = playlist_date;
?>
<html>
<head>
	<title><?=title?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script>
	var datum = "<?php echo playlist_date ?>";

	// Set the date we're counting down to
	var countDownDate = new Date(datum).getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	  // Get today's date and time
	  var now = new Date().getTime();

	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;

	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	  // Display the result in the element with id="demo"
	  document.getElementById("visszaszamol").innerHTML = days + " day " + hours + " hour "
	  + minutes + " minutes " + seconds + " seconds ";

	  // If the count down is finished, write some text
	  if (distance < 0) {
		clearInterval(x);
		document.getElementById("visszaszamol").innerHTML = window.location.replace("http://crosman-host.tk/scriptek/vmix2_0/playliststart.php");
	  }
	}, 1000);
	</script>
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
        <a class="nav-link" href="index.php">Index
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="scheduler.php">Scheduler</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="settings.php">Settings</a>
      </li>
    </ul>
  </div>
</nav>

<br /><br />

<div class="container-fluid">
	<div class="card border-primary mb-4">
	  <div class="card-header">Scheduler</div>
	  <div class="card-body">
		<p class="card-text">
			<center>
				<b>Playlist start after:</b>
				<p id="visszaszamol"></p>
				<?=playlist_date?>
				<br />
				<br />
				Don't close this tab!
			</center>
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