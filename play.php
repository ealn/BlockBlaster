<?php
session_start();
include("conexion.php");

$title = "title";
$link = "";
$date = "";
$resume = "";
$genre= "";
$dir= "";
$actors;
$award;
$seen=0;
if ($id = $_GET['id'])
{
    $linkToDataBase=MiConexion();
    $query = mysql_query("select * from peliculas where ID_PELICULA='$id'");
    if($query)
    {
        $genre_q = mysql_query("select ID_GENERO from genero_pelicula where ID_PELICULA = '$id'");
        if($genre_q)
        {
            $reg_gen=mysql_fetch_array($genre_q);
            $get_genre_q=mysql_query("select NOMBRE from genero where ID_GENERO = '$reg_gen[ID_GENERO]'");
            if($get_genre_q)
            {
                $genre_data=mysql_fetch_array($get_genre_q);
                $genre=$genre_data[NOMBRE];
            }
            else
                echo mysql_error().'  '.$ger_genre_q;
            
            
            $gen_seen_q=mysql_query("select VISTO from genero where ID_GENERO='$reg_gen[ID_GENERO]'");
            if($gen_seen_q)
            {
                $seen_reg=mysql_fetch_array($gen_seen_q);
                $seen=$seen_reg[VISTO];
                $seen++;
                $update_seen_q=mysql_query("UPDATE genero SET VISTO = '$seen' WHERE ID_GENERO = '$reg_gen[ID_GENERO]'");
                
            }
            else
                echo mysql_error().' '.$gen_seen_q;
                
        }
        else
            echo mysql_error().'  '.$genre_q;
        
        $dir_q=mysql_query("select ID_PERSONAJE from director_pelicula WHERE ID_PELICULA = '$id'");
        if($dir_q)
        {
            $reg_dir=mysql_fetch_array($dir_q);
            $get_dir_q=mysql_query("select NOMBRE from personajes where ID = '$reg_dir[ID_PERSONAJE]'");
            if($get_dir_q)
            {
                $dir_data=mysql_fetch_array($get_dir_q);
                $dir=$dir_data[NOMBRE];
            }
            else
                echo mysql_error().' '.$getdir_q;
        }
        else
            echo mysql_error().'  '.$dir_q;
        
        $actors_q=mysql_query("SELECT * FROM personajes p, actor_pelicula a WHERE a.ID_PELICULA='$id' and p.id=a.ID_PERSONAJE");
        if($actors_q)
        {
            $actors=mysql_fetch_array($actors_q);
        }
        else
            echo mysql_error().'  '.$actors_q;        

        $awards_q=mysql_query("SELECT * FROM premio p, premio_pelicula a WHERE a.ID_PELICULA='$id' and p.ID_PREMIO=a.ID_PREMIO");
        if($awards_q)
        {
            $awards=mysql_fetch_array($awards_q);
        }
        else
            echo mysql_error().' '.$awards_q;
        
        
        $registro = mysql_fetch_array($query);
        $title = $registro["NOMBRE"];
        $date = $registro["YEAR"];
        $resume = $registro["DESCRIPCION"];
        $link = "https://www.youtube.com/" . $registro["LINK"];
    }
    else
    {
        echo "database select failed";
    }
}
else
{
    echo "id not defined";
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
					<input type="text" class="form-control" required name="moviename" id="moviename" placeholder="Buscar...">
					<input type="submit" value=" ">
				</form>
			</div>  
			<div class="header-top-right">
                <?php if($_SESSION["usLogin"]==1) { ?>
				<div class="file">
					<a href="upload.php">Subir</a>
				</div>	
                <?php }?>
				<div class="signin">
					<a href="advanced_search.php" class="play-icon popup-with-zoom-anim">Busqueda avanzada</a>
				</div>
				<div class="signin">
					<a href="logout.php" class="play-icon popup-with-zoom-anim">Cerrar</a>
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
					<li><a href="main.php" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
					<li><a href="movies.php" class="sub-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>Peliculas</a></li>	
                    <?php if($_SESSION["usLogin"]==1) { ?>				
				    <li><a href="statistics.php" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>Estadisticas</a></li>
				    <li><a href="user_registration.php" class="sub-icon"><span class="glyphicon glyphicon-film glyphicon-king" aria-hidden="true"></span>Usuarios</a></li>
				    <li><a href="export.php" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>Exportar</a></li>
                    <?php }?>
				</div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-8 single-left">
					<div class="song">
						<div class="song-info">
							<h3><?php echo $title ?></h3>	
					</div>
						<div class="video-grid">
							<iframe src="<?php echo $link ?>" allowfullscreen></iframe>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="published">
						<script src="jquery.min.js"></script>
							<script>
								$(document).ready(function () {
									size_li = $("#myList li").size();
									x=1;
									$('#myList li:lt('+x+')').show();
									$('#loadMore').click(function () {
										x= (x+1 <= size_li) ? x+1 : size_li;
										$('#myList li:lt('+x+')').show();
									});
									$('#showLess').click(function () {
										x=(x-1<0) ? 1 : x-1;
										$('#myList li').not(':lt('+x+')').hide();
									});
								});
							</script>
							<div class="load_more">	
								<ul id="myList">
									<li>
										<h4><?php echo $date ?></h4>
										<p><?php echo $resume ?></p>
                                        <h4>Genero</h4>
                                        <p><?php echo $genre ?></p>
                                        <h4>Director</h4>
                                        <p><?php echo $dir ?></p>
                                        <h4>Reparto</h4>
                                        <?php 
                                        do
                                        {
                                            echo "<p>$actors[NOMBRE]</p>";
                                        }while($actors=mysql_fetch_array($actors_q));
                                        echo "<h4>Premios</h4>";
                                        do
                                        {
                                            echo "<p>$awards[CATEGORIA]</p>";
                                        }while($awards=mysql_fetch_array($awards_q));
                                        ?>
									</li>
								</ul>
							</div>
					</div>
				</div>
				<div class="clearfix"> </div>
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