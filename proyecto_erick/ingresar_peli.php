<?php
    session_start();
	$id=$_SESSION["usuario"];
	if($id==null){
		header("Location: iniciar.php");
	} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="autentia_modalbox/includes/prototype.js"></script>
<script type="text/javascript" src="autentia_modalbox/includes/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="autentia_modalbox/includes/modalbox.js"></script>
<link rel="stylesheet" href="autentia_modalbox/css/modalbox.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CineGuys</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<?php
		include("conexion.php");
		$link=MiConexion();	
		@$pagi = $_GET['pagi'];
		$contar_pagi = (strlen($pagi)); 
		$numer_reg = 9;  
?>
<div id="container">
	<div id="header">
    	<h1><a href="/">CineGuys</a></h1>
        <h2>Lo QUE NO ENCUENTRES, TE LO BUSCAMOS </h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul>
        	<li><a class="selected" href="index.php">Inicio</a></li>
            <li><a href="genero.php">Genero</a></li>
            <li><a href="categorias.php">Categorias</a></li>
            <li><a href="buscar_a.php">Busqueda Avanzada</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
    <div id="body">
		<div id="content">
			<h2>Nueva pelicula</h2>
			<p>&nbsp;</p>
            <fieldset>
                <legend>Agregar</legend>
			<form id="ingresar" action="guardar.php" method="post" enctype="multipart/form-data">
                     <p><label for="id">ID:</label>
                      <input name="id" id="id" value="" type="int" /></p>
                    <p>
                    <p><label for="name">Nombre:</label>
                      <input name="name" id="name" value="" type="text" /></p>
                    <p>
                    <p><label for="pais">Pais:</label>
                      <input name="pais" id="pais" value="" type="text" /></p>
                    <p>
                    <label for="year">Año:</label>
                    <input name="year" id="year" value="" type="text" />
              </p>
<p>
                    <label for="duracion">Duracion:</label>
                    <input name="duracion" id="duracion" value="" type="text" />
              </p>
                    <p>
                    <label for="message">Descripcion:</label>
                    <textarea cols="37" rows="11" name="message" id="message"></textarea></p>
                    <p>
                    <label for="link">Video:</label>
                    <input name="link" id="link" value="" type="text" /></p>
                    <p><label for="ima">Imagen:</label>
                    <input type="file" name="ima" id="ima" /></p>
                    
                     <p><label for="director">Director:</label>
                        <input name="director" id="director" value="" type="text" /></p>
                    <p>
                    <p><label for="actor">Actor:</label>
                        <input name="actor" id="actor" value="" type="text" /></p>
                    <p>

                    <p><label for="genero">genero:</label>
                        <input name="genero" id="genero" value="" type="text" /></p>
                    <p>

                     <p>
                     <label for="premio">Premio:</label>
                     <select name="premio">
                         <option value="1">Mejor actor</option>
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
                     <p>

                    <p><input name="send" style="margin-left: 150px;" class="formbutton" value="Guardar" type="submit" /></p>
                </form>
                </fieldset>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
         
          
        </div>
        
        <div class="sidebar">
       <ul>	
        <li>
                	<h4>Buscar</h4>
                    <ul>
                    	<li>
                            <form id="form1" name="form1" method="post" class="searchform"  action="buscar_por_nombre.php" onsubmit="" >
                                
                                    <input type="text" size="24" value="" name="peli" id="peli" class="s" />
                                    <input type="submit" class="searchsubmit formbutton" value="Buscar" />
                                
                            </form>	
						</li>
					</ul>
                </li>
                
                <li>
                    <h4>Acercas de</h4>
                    <ul>
                        <li>
                        	<p style="margin: 0;">CineGuys esta hecho para la comunidad, la cual si lo desea puede mandar sus aportaciones</p>
                        </li>
                    </ul>
                </li>
                
               
                
                <li>
                    <h4>Ultimas tres subidas</h4>
                    <ul>
                     <?php
					$resul = mysql_query("SELECT * FROM peliculas ORDER BY ID_PELICULA DESC", $link);
					for($i=0; $i<3; $i++){
						$row = mysql_fetch_array($resul);
						printf("<li><a href='detalle_peli.php?id=%s' title='premium templates'><strong>'%s'</strong></a> - '%s'</li>", $row["ID_PELICULA"], $row["NOMBRE"], $row["DESCRIPCION"]);					
					}

					?>
                    </ul>
                </li>
                
            </ul> 
        </div>
   	  <div class="clear"></div>
    </div>

    <div id="footer">
        <div class="footer-content">
        	<!-- A link to http://www.spyka.net must remain. To remove link see http://www.spyka.net/licensing --->
			<p>&copy; CineGuys 2016. Design by Luis Valero y Erick Lara</p>
	  </div>
    </div>
</div>
</body>
</html>
