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
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Search...">
					<input type="submit" value=" ">
				</form>
			</div>  
			<div class="header-top-right">
				<div class="file">
					<a href="upload.php">Upload</a>
				</div>	
				<div class="signin">
					<a href="#small-dialog2" class="play-icon popup-with-zoom-anim">Advanced Search</a>
					<!-- pop-up-box -->
									
				</div>
				<div class="signin">
					<a href="logout.php" class="play-icon popup-with-zoom-anim">Logout</a>
					
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
					<li class="active"><a href="#" class="menu1"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>Movies<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
						<ul class="cl-effect-2">
							<li><a href="movies.php">English</a></li>                                             
							<li><a href="movies.php">Chinese</a></li>
							<li><a href="movies.php">Hindi</a></li> 
						</ul>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu1" ).click(function() {
							$( "ul.cl-effect-2" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
				    <li><a href="history.php" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>History</a></li>
					<li><a href="#" class="menu"><span class="glyphicon glyphicon-film glyphicon-king" aria-hidden="true"></span>Users<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
						<ul class="cl-effect-1">
							<li><a href="userregistration.php">User Registration</a></li>                                             
							<li><a href="users.php">Show Users</a></li>
						</ul>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu" ).click(function() {
							$( "ul.cl-effect-1" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
				  </ul>
				  <!-- script-for-menu -->
						<script>
							$( ".top-navigation" ).click(function() {
							$( ".drop-navigation" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
				</div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-10 show-grid-left main-grids">
					<div class="recommended">
						<div class="recommended-grids english-grid">
							<div class="recommended-info">
								<div class="heading">
									<h3>English</h3>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/mv1.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>7:34</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/mv2.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>9:34</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/mv3.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>3:04</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/mv4.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>2:06</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="recommended">
						<div class="recommended-grids">
							<div class="recommended-info">
								<div class="heading">
									<h3>Chinese</h3>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/ch1.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>2:34</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/ch2.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>3:45</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/ch3.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>7:34</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/ch4.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>6:30</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="recommended">
						<div class="recommended-grids">
							<div class="recommended-info">
								<div class="heading">
									<h3>Hindi</h3>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/h1.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>2:34</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/h2.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>3:45</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/h3.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>7:34</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/h4.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>6:30</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="recommended">
						<div class="recommended-grids">
							<div class="recommended-info">
								<div class="heading">
									<h3>Telugu</h3>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/tm1.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>5:32</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/tm2.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>2:34</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid movie-video-grid-left">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/tm3.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>8:26</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid movie-video-grid-right">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/tm4.jpg" alt="" /></a>
									<div class="time small-time show-time movie-time">
										<p>3:44</p>
									</div>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<h5><a href="single.php" class="title">Varius sit sed viverra Nullam interdum metus</a></h5>
									<ul>
										<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
										<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
									</ul>
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