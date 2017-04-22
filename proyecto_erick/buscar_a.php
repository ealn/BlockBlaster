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
<style type="text/css">
<!--
.Estilo1 {font-weight: bold}
-->
</style>
</head>
<body>
<?php
		include("conexion.php");
		$link=MiConexion();		
?>
<div id="container">
	<div id="header">
    	<h1><a href="/">CineGuys</a></h1>
        <h2>Lo QUE NO ENCUENTRES, TE LO BUSCAMOS </h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul>
        	<li><a href="index.php">Inicio</a></li>
            <li><a href="genero.php">Genero</a></li>
            <li><a href="categorias.php">Categorias</a></li>
            <li><a class="selected" href="buscar_a.php">Busqueda Avanzada</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
    <div id="body">
		<div id="content">
			<h2>Buscar por:</h2>
			<p>&nbsp;</p>
			<form id="form2" method="post" action="busca_gene.php">
			  <p>
			    <label>
			      <span class="Estilo1">
			      <input type="radio" name="Opciones" value="Actor" id="Opciones_0" />
			      Actor</span></label>
			    <strong><br />
			    <label>
			      <input type="radio" name="Opciones" value="Director" id="Opciones_1" />
			      Director</label>
			    <br />
			    <label>
			      <input type="radio" name="Opciones" value="Descripcion" id="Opciones_2" />
			      Descripcion</label>
		      </strong></p>
			  <p>
			    <label>
			    <textarea name="busca" id="busca" cols="85" rows="5"></textarea>
			    </label>
			    <br />
                
		      </p>
              <p><input name="send" class="formbutton" value="Enviar" type="submit" /></p>
			</form>
			<p>&nbsp;</p>
		  <p>&nbsp;</p>
         
          </p>
          
       
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
