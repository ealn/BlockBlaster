<?php
session_start();

$valueAction     = 1;
$valueFantasy    = 1;
$valueHorror     = 2;
$valueMystery    = 5;
$valueWar        = 6;
$valueAventure   = 5;
$valueSciFi      = 4;
$valueTriller    = 4;
$valueDrama      = 3;
$valueRomance    = 2;
$valueSport      = 5;
$valueBiography  = 6;
$valueHistory    = 8;
$valueComedy     = 9;
$valueCrime      = 4;
$valueFamily     = 6;
$valueMusic      = 3;
$valueMusical    = 2;
$valueWestern    = 1;
$valueAnimation  = 2;

?>
<!DOCTYPE HTML>
<html>
<head>
<title>BlockBlaster</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/Chart.min.js"></script>
<!--start-smoth-scrolling-->
</head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="main.php"><h1><img src="images/logo.png" alt="" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right" action="search.php" method="post">
					<input type="text" class="form-control" required name="moviename" id="moviename" placeholder="Search...">
					<input type="submit" value=" ">
				</form>
			</div>  
			<div class="header-top-right">
				<?php if($_SESSION["usLogin"]==1) { ?>
				<div class="file">
					<a href="upload.php">Upload</a>
				</div>	
				<?php }?>
				<div class="signin">
					<a href="advanced_search.php" class="play-icon popup-with-zoom-anim">Advanced Search</a>
				</div>
				<div class="signin">
					<a href="logout.php" class="play-icon popup-with-zoom-anim">Logout</a>
				</div>
				<div class="clearfix"> </div>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav>
        <div class="col-sm-3 col-md-2 sidebar">
			<div class="top-navigation">
				<div class="t-menu">MENU</div>
				<div class="t-img">
					<img src="images/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="drop-navigation drop-navigation">
				  <ul class="nav nav-sidebar">
					<li><a href="main.php" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					<li><a href="movies.php" class="sub-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>Movies</a></li>
					<?php if($_SESSION["usLogin"]==1) { ?>					
				    <li class="active"><a href="statistics.php" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>Statistics</a></li>
				    <li><a href="user_registration.php" class="sub-icon"><span class="glyphicon glyphicon-film glyphicon-king" aria-hidden="true"></span>Users</a></li>
				    <?php }?>
				</div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="main-grids news-main-grids">
					<div class="recommended-info">
						<h3>History Of My Play</h3>
						<div>
							<canvas id="chart1" width="100" height="20"></canvas>
							<script>
								var ctx = document.getElementById("chart1");
								
								var data = {
								labels: ["Action",   "Fantasy",   "Horror",  "Mystery", "War", 
										 "Aventure", "Sci-Fi",    "Triller", "Drama",   "Romance", 
										 "Sport",    "Biography", "History", "Comedy",  "Crime", 
										 "Family",   "Music",     "Musical", "Western", "Animation"],
								datasets: [{ label: '# de interacciones',
											 data: [<?php echo $valueAction    ?>,
													<?php echo $valueFantasy   ?>,
													<?php echo $valueHorror    ?>,
													<?php echo $valueMystery   ?>,
													<?php echo $valueWar       ?>,
													<?php echo $valueAventure  ?>,
													<?php echo $valueSciFi     ?>,
													<?php echo $valueTriller   ?>,
													<?php echo $valueDrama     ?>,
													<?php echo $valueRomance   ?>,
													<?php echo $valueSport     ?>,
													<?php echo $valueBiography ?>,
													<?php echo $valueHistory   ?>,
													<?php echo $valueComedy    ?>,
													<?php echo $valueCrime     ?>,
													<?php echo $valueFamily    ?>,
													<?php echo $valueMusic     ?>,
													<?php echo $valueMusical   ?>,
													<?php echo $valueWestern   ?>,
													<?php echo $valueAnimation ?>],
											 backgroundColor: [ 'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)',
																'rgba(54, 162, 235, 0.2)'],
											 borderColor: [ 'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)',
															'rgba(200,200,200,1)'],
											 borderWidth: 2}]};

								var options = { scales: { yAxes: [ { ticks: { beginAtZero:true } } ] } };
								var chart1 = new Chart(ctx, { type: 'bar',
															  data: data,
															  options: options});
							</script>
						</div>
						<p class="history-text">Esta grafica representa los valores de el numero de interacciones de cada genero
						de cada genero</p>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>