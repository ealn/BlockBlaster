<?php
session_start();
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
		<!-- upload -->
		<div class="upload">
			<!-- container -->
			<div class="container">
				
				<form class="form-horizontal" role="form" action="save_movie.php" method="post" enctype="multipart/form-data">
  					<div class="form-group">
    					<h3>Agregar pelicula</h3>
    					<label class="col-lg-1 control-label">Nombre:</label>
    					<div class="col-lg-5">
      						<input type="text" class="form-control" required name="name" id="name" placeholder="Nombre">
    					</div>
  					</div>

					<div class="form-group">
    					<label class="col-lg-1 control-label">Pais:</label>
    					<div class="col-lg-5">
      						<input type="text" class="form-control" required name="pais" id="pais" placeholder="Pais">   <!-- TODO: change this name-->
    					</div>
  					</div>

  					<div class="form-group">
    					<label class="col-lg-1 control-label">Año:</label>
    					<div class="col-lg-5">
      						<input type="text" class="form-control" required name="year" id="year" placeholder="Año">
    					</div>
  					</div>

  					<div class="form-group">
    					<label class="col-lg-1 control-label">Tiempo (min):</label>
    					<div class="col-lg-5">
      						<input type="text" class="form-control" required name="duracion" id="duracion" placeholder="Tiempo">    <!-- TODO: change this name-->
    					</div>
  					</div>

  					<div class="form-group">
    					<label class="col-lg-1 control-label">Descripcion:</label>
    					<div class="col-lg-5">
    					    <textarea class="form-control" rows="10" required name="descripcion" id="descripcion" placeholder="Descripcion"></textarea>          <!-- TODO: change this name-->
    					</div>
  					</div>

  					<div class="form-group">
    					<label class="col-lg-1 control-label">Video:</label>
    					<div class="col-lg-5">
      						<input type="text" class="form-control" required name="link" id="link" placeholder="Link"> 
    					</div>
  					</div>

  					<div class="form-group">
    					<label class="col-lg-1 control-label">Imagen:</label>
    					<div class="col-lg-5">
      						<input type="file" class="form-control" required name="ima" id="ima"> 
    					</div>
  					</div>

  					<div class="form-group">
    					<label class="col-lg-1 control-label">Director:</label>
    					<div class="col-lg-5">
      						<input type="text" class="form-control" required name="director" id="director" placeholder="Director"> 
    					</div>
  					</div>

  					<div class="form-group">
    					<label class="col-lg-1 control-label">Actores:</label>
    					<div class="col-lg-5">
      						<input type="text" class="form-control" required name="actor1" id="actor1" placeholder="Actor #1">
      						<input type="text" class="form-control" required name="actor2" id="actor2" placeholder="Actor #2"> 
      						<input type="text" class="form-control" required name="actor3" id="actor3" placeholder="Actor #3">  
    					</div>
  					</div>

  					<div class="form-group">
    					<label class="col-lg-1 control-label">Genero:</label>
    					<div class="col-lg-5">
      						<select class="form-control" name="genero" />
                                <option value="1">Accion</option>
                                <option value="2">Fantasia</option>
                                <option value="3">Horror</option>
                                <option value="4">Mysterio</option>
                                <option value="5">Guerra</option>
                                <option value="6">Aventura</option>
                                <option value="7">Sci-Fi</option>
                                <option value="8">Thriller</option>
                                <option value="9">Drama</option>
                                <option value="10">Romance</option>
                                <option value="11">Deportes</option>
                                <option value="12">Biografia</option>
                                <option value="13">Historia</option>
                                <option value="14">Comedia</option>
                                <option value="15">Crimen</option>
                                <option value="16">Familiar</option>
                                <option value="17">Music</option>
                                <option value="18">Musical</option>
                                <option value="19">Western</option>
                                <option value="20">Animacion</option>
                    </select>                            
    					</div>
  					</div>

  					<div class="form-group">
    					<label class="col-lg-1 control-label">Premio:</label>
    					<div class="col-lg-5">
      						<select class="form-control" name="premio">
                     			<option value="1">Mejor actor</option>                      <!-- TODO: change these values-->
                     			<option value="2">Mejor actriz</option>
                    			<option value="3">Mejor director</option>
                     			<option value="4">Mejor diseño de producción</option>
                     			<option value="5">Mejor fotografía</option>
                     			<option value="6">Mejor guion adaptado</option>
                     			<option value="7">Mejor maquillaje y peinado</option>
                     			<option value="8">Mejor película</option>
                     			<option value="9">Mejor sonido</option>
                     			<option value="10">Mejor cortometraje animado</option>
                     			<option value="11">Mejor cortometraje de ficción</option>
                     			<option value="12">Mejor canción original</option>
                     			<option value="13">Mejor montaje</option>
                     			<option value="14">Mejor actor de reparto</option>
                     			<option value="15">Mejor actriz de reparto</option>
                     			<option value="16">Mejor guion original</option>
                     			<option value="17">Mejor documental</option>
                     			<option value="18">Mejor documental largo</option>
                     			<option value="19">Mejor diseño de vestuario</option>
                     			<option value="20">Mejor película de habla no inglesa</option>
                     			<option value="21">Mejor edición de sonido</option>
                     			<option value="22">Mejor banda sonora</option>
                 			</select>
    					</div>
  					</div>

  					<div class="form-group">
    					<div class="signin">
      						<button type="submit" class="btn btn-info">Agregar</button>
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