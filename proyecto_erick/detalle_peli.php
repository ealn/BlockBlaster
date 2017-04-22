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
		$id = $_GET["id"];			
?>
<div id="container">
	<div id="header">
    	<h1><a href="/">CineGuys</a></h1>
        <h2>LAS PELICULAS MAS CULTAS DEL MUNDO </h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul>
        	<li><a class="selected" href="index.php">Inicio</a></li>
            <li><a href="genero.php">Genero</a></li>
            <li><a href="pais.php">pais</a></li>
            <li><a href="categorias.php">Año</a></li>
            <li><a href="premio.php">Premios</a></li>
            <li><a href="director.php">Director</a></li>
            <li><a href="Actor.php">Actor</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
    <div id="body">
		<div id="content">
			<h2>Busqueda</h2>
          <table border="0" cellpadding="0" cellspacing="0">
          	
            <?php
				//printf($id);
				$consulta = mysql_query("SELECT * FROM peliculas WHERE ID_PELICULA=$id", $link);
				$consul_actores = mysql_query("SELECT * FROM actor_pelicula, personajes WHERE ID=ID_PERSONAJE AND ID_PELICULA = $id", $link);
				$consul_director = mysql_query("SELECT * FROM director_pelicula, personajes WHERE ID=ID_PERSONAJE AND ID_PELICULA = $id", $link);
				$consul_genero = mysql_query("SELECT * FROM genero_pelicula p, genero g WHERE p.ID_GENERO=g.ID_GENERO AND ID_PELICULA = $id", $link);
				$numero = mysql_num_rows($consulta);
				$numero_actores = mysql_num_rows($consul_actores);
				$numero_director = mysql_num_rows($consul_director);
				$numero_genero = mysql_num_rows($consul_genero);
				//printf($numero);
				$registro = mysql_fetch_array($consulta);
				
				printf(" 
						<tr>
							<td rowspan='7' align='center' valign='middle'><img src='icon_peli/%s.jpg' /></td>
                			<td><H3>%s</H3></td>
              			</tr>
              			<tr>
                			<td>%s</td>
              			</tr>
              			<tr>
                			<td><strong>Reparto: </strong>",$registro["ID_PELICULA"], $registro["NOMBRE"], $registro["DESCRIPCION"]);
				
				if($numero_director>0){
					$reg = mysql_fetch_array($consul_actores);
					printf("%s",$reg["NOMBRE"]);	
				}else{
					printf(" No hay datos");	
				}			
				printf(	"</td>
              			</tr>
              			<tr>
                			<td><strong>Director: </strong>");
				if($numero_actores>0){
					for($a=0; $a<$numero_actores; $a++){
						$reg2 = mysql_fetch_array($consul_director);
						if($a<=0){
							printf("%s",$reg2["NOMBRE"]);
						}else{
							printf(", %s",$reg2["NOMBRE"]);
						}
						
					}			
				}else{
					printf(" No hay datos");	
				}				
							
				printf("		
						</td>
              			</tr>
              			<tr>
                			<td><strong>Año: </strong>%s</td>
			  			<tr>
                			<td><strong>Genero: </strong>",$registro["YEAR"]);
				
				if($numero_genero>0){
					for($b=0; $b<$numero_genero; $b++){
						$reg3 = mysql_fetch_array($consul_genero);
						if($b<=0){
							printf("%s",$reg3["NOMBRE"]);
						}else{
							printf(", %s",$reg3["NOMBRE"]);
						}
						
					}			
				}else{
					printf(" No hay datos");	
				}		
				
				
				printf("</td>
						<tr>
                			<td><strong>Duracion: </strong>%s</td>
						</tr>
				
				", $registro["DURACION"]);
						
				printf("<tr><td colspan='2' align='center'>
					
				");
				if($registro["LINK"]!=null){
					printf("<iframe width='560' height='315' src='//www.youtube.com/%s' frameborder='0' allowfullscreen></iframe>",$registro["LINK"]);
				}else{
					printf("<iframe width='560' height='315' src='//www.youtube.com/embed/01jL0UTrYxc' frameborder='0' allowfullscreen></iframe>");
				}
				printf("");
				
					?>
            	
                 
                </td>
                </tr>
                
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
		$id = $_GET["id"];			
?>
<div id="container">
	<div id="header">
    	<h1><a href="/">CineGuys</a></h1>
        <h2>LAS PELICULAS MAS CULTAS DEL MUNDO </h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul>
        	<li><a class="selected" href="index.php">Inicio</a></li>
            <li><a href="genero.php">Genero</a></li>
            <li><a href="pais.php">pais</a></li>
            <li><a href="categorias.php">Año</a></li>
            <li><a href="premio.php">Premios</a></li>
            <li><a href="director.php">Director</a></li>
            <li><a href="Actor.php">Actor</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
    <div id="body">
		<div id="content">
			<h2>Busqueda</h2>
          <table border="0" cellpadding="0" cellspacing="0">
          	
            <?php
				//printf($id);
				$consulta = mysql_query("SELECT * FROM peliculas WHERE ID_PELICULA=$id", $link);
				$consul_actores = mysql_query("SELECT * FROM actor_pelicula, personajes WHERE ID=ID_PERSONAJE AND ID_PELICULA = $id", $link);
				$consul_director = mysql_query("SELECT * FROM director_pelicula, personajes WHERE ID=ID_PERSONAJE AND ID_PELICULA = $id", $link);
				$consul_genero = mysql_query("SELECT * FROM genero_pelicula p, genero g WHERE p.ID_GENERO=g.ID_GENERO AND ID_PELICULA = $id", $link);
				$numero = mysql_num_rows($consulta);
				$numero_actores = mysql_num_rows($consul_actores);
				$numero_director = mysql_num_rows($consul_director);
				$numero_genero = mysql_num_rows($consul_genero);
				//printf($numero);
				$registro = mysql_fetch_array($consulta);
				
				printf(" 
						<tr>
							<td rowspan='7' align='center' valign='middle'><img src='icon_peli/%s.jpg' /></td>
                			<td><H3>%s</H3></td>
              			</tr>
              			<tr>
                			<td>%s</td>
              			</tr>
              			<tr>
                			<td><strong>Reparto: </strong>",$registro["ID_PELICULA"], $registro["NOMBRE"], $registro["DESCRIPCION"]);
				
				if($numero_director>0){
					$reg = mysql_fetch_array($consul_actores);
					printf("%s",$reg["NOMBRE"]);	
				}else{
					printf(" No hay datos");	
				}			
				printf(	"</td>
              			</tr>
              			<tr>
                			<td><strong>Director: </strong>");
				if($numero_actores>0){
					for($a=0; $a<$numero_actores; $a++){
						$reg2 = mysql_fetch_array($consul_director);
						if($a<=0){
							printf("%s",$reg2["NOMBRE"]);
						}else{
							printf(", %s",$reg2["NOMBRE"]);
						}
						
					}			
				}else{
					printf(" No hay datos");	
				}				
							
				printf("		
						</td>
              			</tr>
              			<tr>
                			<td><strong>Año: </strong>%s</td>
			  			<tr>
                			<td><strong>Genero: </strong>",$registro["YEAR"]);
				
				if($numero_genero>0){
					for($b=0; $b<$numero_genero; $b++){
						$reg3 = mysql_fetch_array($consul_genero);
						if($b<=0){
							printf("%s",$reg3["NOMBRE"]);
						}else{
							printf(", %s",$reg3["NOMBRE"]);
						}
						
					}			
				}else{
					printf(" No hay datos");	
				}		
				
				
				printf("</td>
						<tr>
                			<td><strong>Duracion: </strong>%s</td>
						</tr>
				
				", $registro["DURACION"]);
						
				printf("<tr><td colspan='2' align='center'>
					
				");
				if($registro["LINK"]!=null){
					printf("<iframe width='560' height='315' src='//www.youtube.com/%s' frameborder='0' allowfullscreen></iframe>",$registro["LINK"]);
				}else{
					printf("<iframe width='560' height='315' src='//www.youtube.com/embed/01jL0UTrYxc' frameborder='0' allowfullscreen></iframe>");
				}
				printf("");
				
					?>
            	
                 
                </td>
                </tr>
                
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
>>>>>>> 22adce7e1de00710e297054932abbbed77b22b2d
