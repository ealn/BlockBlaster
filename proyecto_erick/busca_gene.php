<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CineGuys</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<?php
		include("conexion.php");
		$link=MiConexion();	
		$busca = $_POST["busca"];	
		$ope = $_POST["Opciones"];		
?>
<div id="container">
	<div id="header">
    	<h1><a href="/">CineGuys</a></h1>
        <h2>Lo QUE NO ENCUENTRES, TE LO BUSCAMOS</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul>
        	<li><a href="index.php">Inicio</a></li>
            <li><a href="genero.php">Genero</a></li>
            <li><a href="pais.php">pais</a></li>
            <li><a class="selected" href="categorias.php">Año</a></li>
            <li><a href="premio.php">Premios</a></li>
            <li><a href="director.php">Director</a></li>
            <li><a href="Actor.php">Actor</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
    <div id="body">
		<div id="content">
			<h2>Busqueda por <?php echo $ope ?></h2>
            <p>&nbsp;</p>
         
          </p>
          
          <table border="0" cellpadding="0" cellspacing="0">
          	
            <?php
				if($ope=="Actor"){
					$consulta = mysql_query("select p.NOMBRE, p.ID_PELICULA, p.DESCRIPCION, j.NOMBRE as NOMBRE_P from peliculas p, personajes j, actor_pelicula a where j.ID = a.ID_PERSONAJE and p.ID_PELICULA=a.ID_PELICULA and j.NOMBRE LIKE '%$busca%'", $link);
							$numero = mysql_num_rows($consulta);
							if($numero>0){
								$i = round(($numero+1)/3, 0, PHP_ROUND_HALF_UP);
									for($k=0;$k<$i;$k++){
										printf("<tr>");
										for($j=0;$j<3;$j++){
											if($row = mysql_fetch_array($consulta)){
												printf("<td align='center' valign='top'><p><a href='detalle_peli.php?id=%s' title='premium templates'><strong>%s</strong></a></p><p><strong>Actor:</strong> %s</p></td>",$row["ID_PELICULA"], $row["NOMBRE"], $row["NOMBRE_P"]);	
											}else{
												printf("<td></td>");
											}
										}
										printf("</tr>");
									}
								}else{
									printf("<tr><td>No se encontro ningun resultado</td></tr>");
							}
					
				}else{
					if($ope=="dir"){
						printf("Por director");
					}else{
						if($ope=="Descripcion"){
							$consulta = mysql_query("SELECT * FROM peliculas WHERE DESCRIPCION LIKE '%$busca%'", $link);
							$numero = mysql_num_rows($consulta);
							if($numero>0){
								$i = round(($numero+1)/3, 0, PHP_ROUND_HALF_UP);
									for($k=0;$k<$i;$k++){
										printf("<tr>");
										for($j=0;$j<3;$j++){
											if($row = mysql_fetch_array($consulta)){
												printf("<td align='center' valign='top'><p><a href='detalle_peli.php?id=%s' title='premium templates'><strong>%s</strong></a></p><p> - %s</p></td>",$row["ID_PELICULA"], $row["NOMBRE"],$row["DESCRIPCION"]);	
											}else{
												printf("<td></td>");
											}
										}
										printf("</tr>");
									}
								}else{
									printf("<tr><td>No se encontro ningun resultado</td></tr>");
							}
						 }
					}
				}
			
			
			
			
			/*
				$consulta = mysql_query("SELECT * FROM peliculas WHERE NOMBRE LIKE '%$peli%'", $link);
				$numero = mysql_num_rows($consulta);
				if($numero>0 & $peli!=""){
					$i = round($numero/3, 0, PHP_ROUND_HALF_UP);
					for($k=0;$k<$i;$k++){
						printf("<tr>");
						for($j=0;$j<3;$j++){
							if($row = mysql_fetch_array($consulta)){
								printf("<td align='center' valign='top'><a href='detalle_peli.php?id=%s'><img src='icon_peli/%s.jpg' alt='' width='170' height='243' /></a>
           					<p><a href='detalle_peli.php?id=%s' title='premium templates'><strong>%s</strong></a></p></td>", $row["ID_PELICULA"],$row["ID_PELICULA"],$row["ID_PELICULA"], $row["NOMBRE"]);	
							}else{
								printf("<td></td>");
							}
						}
						printf("</tr>");
					}
					
					
				}else{
					printf("<tr><td>No se encontro ningun resultado</td></tr>");
				}
						*/
						?>

            	
            </table>
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
                        	<p style="margin: 0;">CineGuys esta hecho para ver y disfrutar peliculas cultas y ganadoras de todos los tiempos.</p>
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
						printf("<li><a href='detalle_peli.php?id=%s' title='premium templates'><strong>'%s'</strong></a> - '%s'</li>",$row["ID_PELICULA"], $row["NOMBRE"], $row["DESCRIPCION"]);					
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
=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CineGuys</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<?php
		include("conexion.php");
		$link=MiConexion();	
		$busca = $_POST["busca"];	
		$ope = $_POST["Opciones"];		
?>
<div id="container">
	<div id="header">
    	<h1><a href="/">CineGuys</a></h1>
        <h2>Lo QUE NO ENCUENTRES, TE LO BUSCAMOS</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul>
        	<li><a href="index.php">Inicio</a></li>
            <li><a href="genero.php">Genero</a></li>
            <li><a href="pais.php">pais</a></li>
            <li><a class="selected" href="categorias.php">Año</a></li>
            <li><a href="premio.php">Premios</a></li>
            <li><a href="director.php">Director</a></li>
            <li><a href="Actor.php">Actor</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
    <div id="body">
		<div id="content">
			<h2>Busqueda por <?php echo $ope ?></h2>
            <p>&nbsp;</p>
         
          </p>
          
          <table border="0" cellpadding="0" cellspacing="0">
          	
            <?php
				if($ope=="Actor"){
					$consulta = mysql_query("select p.NOMBRE, p.ID_PELICULA, p.DESCRIPCION, j.NOMBRE as NOMBRE_P from peliculas p, personajes j, actor_pelicula a where j.ID = a.ID_PERSONAJE and p.ID_PELICULA=a.ID_PELICULA and j.NOMBRE LIKE '%$busca%'", $link);
							$numero = mysql_num_rows($consulta);
							if($numero>0){
								$i = round(($numero+1)/3, 0, PHP_ROUND_HALF_UP);
									for($k=0;$k<$i;$k++){
										printf("<tr>");
										for($j=0;$j<3;$j++){
											if($row = mysql_fetch_array($consulta)){
												printf("<td align='center' valign='top'><p><a href='detalle_peli.php?id=%s' title='premium templates'><strong>%s</strong></a></p><p><strong>Actor:</strong> %s</p></td>",$row["ID_PELICULA"], $row["NOMBRE"], $row["NOMBRE_P"]);	
											}else{
												printf("<td></td>");
											}
										}
										printf("</tr>");
									}
								}else{
									printf("<tr><td>No se encontro ningun resultado</td></tr>");
							}
					
				}else{
					if($ope=="dir"){
						printf("Por director");
					}else{
						if($ope=="Descripcion"){
							$consulta = mysql_query("SELECT * FROM peliculas WHERE DESCRIPCION LIKE '%$busca%'", $link);
							$numero = mysql_num_rows($consulta);
							if($numero>0){
								$i = round(($numero+1)/3, 0, PHP_ROUND_HALF_UP);
									for($k=0;$k<$i;$k++){
										printf("<tr>");
										for($j=0;$j<3;$j++){
											if($row = mysql_fetch_array($consulta)){
												printf("<td align='center' valign='top'><p><a href='detalle_peli.php?id=%s' title='premium templates'><strong>%s</strong></a></p><p> - %s</p></td>",$row["ID_PELICULA"], $row["NOMBRE"],$row["DESCRIPCION"]);	
											}else{
												printf("<td></td>");
											}
										}
										printf("</tr>");
									}
								}else{
									printf("<tr><td>No se encontro ningun resultado</td></tr>");
							}
						 }
					}
				}
			
			
			
			
			/*
				$consulta = mysql_query("SELECT * FROM peliculas WHERE NOMBRE LIKE '%$peli%'", $link);
				$numero = mysql_num_rows($consulta);
				if($numero>0 & $peli!=""){
					$i = round($numero/3, 0, PHP_ROUND_HALF_UP);
					for($k=0;$k<$i;$k++){
						printf("<tr>");
						for($j=0;$j<3;$j++){
							if($row = mysql_fetch_array($consulta)){
								printf("<td align='center' valign='top'><a href='detalle_peli.php?id=%s'><img src='icon_peli/%s.jpg' alt='' width='170' height='243' /></a>
           					<p><a href='detalle_peli.php?id=%s' title='premium templates'><strong>%s</strong></a></p></td>", $row["ID_PELICULA"],$row["ID_PELICULA"],$row["ID_PELICULA"], $row["NOMBRE"]);	
							}else{
								printf("<td></td>");
							}
						}
						printf("</tr>");
					}
					
					
				}else{
					printf("<tr><td>No se encontro ningun resultado</td></tr>");
				}
						*/
						?>

            	
            </table>
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
                        	<p style="margin: 0;">CineGuys esta hecho para ver y disfrutar peliculas cultas y ganadoras de todos los tiempos.</p>
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
						printf("<li><a href='detalle_peli.php?id=%s' title='premium templates'><strong>'%s'</strong></a> - '%s'</li>",$row["ID_PELICULA"], $row["NOMBRE"], $row["DESCRIPCION"]);					
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
>>>>>>> 22adce7e1de00710e297054932abbbed77b22b2d
