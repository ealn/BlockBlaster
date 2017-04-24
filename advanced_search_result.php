<?php 
  session_start();
  include("conexion.php");
  $link=MiConexion();
  $option = $_POST['optradio'];
  $value = $_POST['fieldvalue'];
  $image ="";
  $director = "";
  $title ="";
  $id = "";
  $registro;
  $trace=0;
  if(!strcmp($option,"name"))
  {
        $movie_name = mysql_query("select * from  peliculas where NOMBRE like '%$value%'");
        if($movie_name)
        {
            $registro=mysql_fetch_assoc($movie_name);
        }
        else
        {
            echo mysql_error().'  '.$movie_name;
        }
  }
  if(!strcmp($option,"genre"))
  {
        $get_genre_q = mysql_query("select ID_GENERO from genero where NOMBRE like '%$value%'");
        if($get_genre_q)
        {
            $get_idgenre=mysql_fetch_assoc($get_genre_q);
            $movie_name = mysql_query("SELECT * FROM peliculas p, genero_pelicula g WHERE p.ID_PELICULA=g.ID_PELICULA AND ID_GENERO = $get_idgenre[ID_GENERO]");
            if($movie_name)
            {
                $registro = mysql_fetch_assoc($movie_name);   
            }
            else
            {   
                echo mysql_error().'  '.$movie_name;
            }                     
        }
        else
        {
            echo mysql_error().'  '.$get_genre;
        }
  }
  if(!strcmp($option,"director"))
  {
        $get_dir_q = mysql_query("select ID from personajes where NOMBRE like '%$value%'");
        if($get_dir_q)
        {
            $get_iddir=mysql_fetch_assoc($get_dir_q);
            $movie_name = mysql_query("SELECT * FROM peliculas p, director_pelicula g WHERE p.ID_PELICULA=g.ID_PELICULA AND g.ID_PERSONAJE = $get_iddir[ID]");
            if($movie_name)
            {
                $registro = mysql_fetch_assoc($movie_name);   
            }
            else
            {   
                echo mysql_error().'  '.$movie_name;
            }                     
        }
        else
        {
            echo mysql_error().'  '.$get_dir_q;
        }
  }
  if(!strcmp($option,"country"))
  {
        $movie_name = mysql_query("select * from  peliculas where PAIS like '%$value%'");
        if($movie_name)
        {
            $registro=mysql_fetch_assoc($movie_name);
        }
        else
        {
            echo mysql_error().'  '.$movie_name;
        }
  }
  if(!strcmp($option,"actor"))
  {
        $get_dir_q = mysql_query("select ID from personajes where NOMBRE like '%$value%'");
        if($get_dir_q)
        {
            $get_iddir=mysql_fetch_assoc($get_dir_q);
            $movie_name = mysql_query("SELECT * FROM peliculas p, actor_pelicula g WHERE p.ID_PELICULA=g.ID_PELICULA AND g.ID_PERSONAJE = $get_iddir[ID]");
            if($movie_name)
            {
                $registro = mysql_fetch_assoc($movie_name);   
            }
            else
            {   
                echo mysql_error().'  '.$movie_name;
            }                     
        }
        else
        {
            echo mysql_error().'  '.$get_dir_q;
        }
  }
  
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
		<!-- upload -->
		<div class="upload">
			<!-- container -->
			<div class="container">
				
				<form class="form-horizontal" role="form" action="play.php" method="post" enctype="multipart/form-data">
  					<div class="form-group">
    					<h3>Results</h3>
  					</div>
					<div class="recommended">
						<div class="recommended-grids">
						<?php
                        echo $trace;
                        if($registro)
                        {
                            do
                            {
                                $image = $registro[IMG];
                                $title = $registro[NOMBRE];
                                $id = "play.php?id=".$registro[ID_PELICULA];
                                ?>
                                <div class="col-md-3 resent-grid recommended-grid">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="<?php echo $id?>"><img src="<?php echo $image?>" height="400" width="250" alt="" /></a>
                                        <div class="time small-time">
                                            <p>2:34</p>
                                        </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info video-info-grid">
                                        <h5><a href="<?php echo $id?>" class="title"><?php echo $title?></a></h5>
                                        <ul>
                                            <li><p class="author author-info"><a href="#" class="author"><?php echo $director?></a></p></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php
                            }while($registro = mysql_fetch_assoc($movie_name)); 
                        }
                        else
                        {
                            echo "<p>No results found</p>";
                        }
                        ?>
						</div>
					</div>
				</form>
			</div>
			<!-- //container -->
		</div>
		<!-- //upload -->
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