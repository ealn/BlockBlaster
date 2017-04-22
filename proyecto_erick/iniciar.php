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
			<h2 align="center">Iniciar Sesion</h2>
<form id="form1" name="form1" method="post" action="autentificacion.php">
  <table width="259" align="center" border="0">
    <tr>
      <td width="141" align="left" bordercolor="0">Usuario</td>
      <td width="158" align="left" bordercolor="0"><label for="usu"></label>
          <input name="usu" type="text" id="usu" size="30" /></td>
    </tr>
    <tr>
      <td align="left" bordercolor="0">Contraseña</td>
      <td align="left" bordercolor="0"><input name="con" type="password" id="con" size="30" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bordercolor="0"><input type="submit" name="ok" id="ok" value="Aceptar" /></td>
    </tr>
  </table>
</form>
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
			<p>&copy; CineGuys 2016. Design by Luis Valero y Erick Lara </p>
	  </div>
    </div>
</div>
</body>
</html>
