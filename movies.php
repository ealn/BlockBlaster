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
				<div class="file">
					<a href="upload.php">Upload</a>
				</div>	
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
					<li class="active"><a href="movies.php" class="sub-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>Movies</a></li>					
				    <li><a href="statistics.php" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>Statistics</a></li>
				    <li><a href="user_registration.php" class="sub-icon"><span class="glyphicon glyphicon-film glyphicon-king" aria-hidden="true"></span>Users</a></li>
				</div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-10 show-grid-left main-grids">
					<div class="recommended">
						<div class="recommended-grids english-grid">
							<div class="recommended-info">
								<div class="heading">
									<h3>Drama movies</h3>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=1"><img src="images/1.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=1" class="title">Birdman</a></h5>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=2"><img src="images/2.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=2" class="title">12 Años de exclavitud</a></h5>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=3"><img src="images/3.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=3" class="title">Argo</a></h5>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=8"><img src="images/8.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=8" class="title">Sin lugar para los debiles</a></h5>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="recommended">
						<div class="recommended-grids english-grid">
							<div class="recommended-info">
								<div class="heading">
									<h3>War movies</h3>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=11"><img src="images/11.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=11" class="title">El señor de los anillos</a></h5>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=12"><img src="images/12.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=12" class="title">Gladiador</a></h5>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=10"><img src="images/10.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=10" class="title">Alto impacto</a></h5>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=14"><img src="images/14.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=14" class="title">Corazon valiente</a></h5>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="recommended">
						<div class="recommended-grids english-grid">
							<div class="recommended-info">
								<div class="heading">
									<h3>Movies to enjoy</h3>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=4"><img src="images/4.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=4" class="title">Discurso del rey</a></h5>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=5"><img src="images/5.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=5" class="title">Zona de medio</a></h5>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=9"><img src="images/9.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=9" class="title">Infiltrados</a></h5>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="play.php?id=13"><img src="images/13.jpg" height="400" width="250" alt="" /></a>
								</div>
								<div class="resent-grid-info recommended-grid-info video-info-grid">
									<h5><a href="play.php?id=13" class="title">Titanic</a></h5>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
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