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
		$id_pais = $_GET["id"];
		$pagi = $_GET['pagi'];
		$contar_pagi = (strlen($pagi)); 
		$numer_reg = 9;	
?>
<div id="container">
	<div id="header">
    	<h1><a href="/">CineGuys</a></h1>
        <h2>LAS PELICULAS MAS CULTAS DEL MUNDO</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul>
        	<li><a href="index.php">Inicio</a></li>
            <li><a href="genero.php">Genero</a></li>
            <li><a class="selected" href="pais.php">pais</a></li>
            <li><a href="categorias.php">Año</a></li>
            <li><a href="premio.php">Premios</a></li>
            <li><a href="director.php">Director</a></li>
            <li><a href="actor.php">Actor</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
    <div id="body">
		<div id="content">
			<h2><?PHP 
				$ge= mysql_query("SELECT * FROM pais WHERE id_pais=$id_pais", $link);
				$row3 = mysql_fetch_array($ge);
				printf("%s",$row3["NOMBRE"]);
			
			 ?> </h2>
            <p>&nbsp;</p>
         
          </p>
          
          <table border="0" cellpadding="0" cellspacing="0">
          	
            <?php
					$resul = mysql_query("SELECT * FROM peliculas WHERE pais LIKE (SELECT pais FROM PAIS WHERE ID_PAIS=$id_pais)", $link);
					$numero_registros0 = mysql_num_rows($resul);  
					$prim_reg_an = $numer_reg - $pagi; 
					$prim_reg_ant = abs($prim_reg_an);  
					
					if ($pagi <> 0)  
{  
$pag_anterior = "<a href='buscar_por_pais.php?id=$id_pais&pagi=$prim_reg_ant'>Pagina anterior</a>"; 
} 
// ----------------------------- Pagina siguiente 
$prim_reg_sigu = $numer_reg + $pagi; 

if ($pagi < $numero_registros0 - ($numer_reg - 1))  
{  
$pag_siguiente = "<a href='buscar_por_pais.php?id=$id_pais&pagi=$prim_reg_sigu'>Pagina siguiente</a>"; 
} 
// ----------------------------- Separador 
if ($pagi <> 0 and $pagi < $numero_registros0 - ($numer_reg - 1))  
{  
$separador = "|"; 
} 
// Creamos la barra de navegacion 

@$pagi_navegacion = "$pag_anterior $separador $pag_siguiente"; 

// ----------------------------- 
############################################## 

if ($contar_pagi > 0)  
{  
// Si recibimos un valor por la variable $page ejecutamos esta consulta 

    $query = "SELECT * FROM peliculas WHERE pais LIKE (SELECT pais FROM PAIS WHERE ID_PAIS=$id_pais) LIMIT $pagi,$numer_reg "; 
}  
else  
{  
// Si NO recibimos un valor por la variable $page ejecutamos esta consulta 

    $query = "SELECT * FROM peliculas WHERE pais LIKE (SELECT pais FROM PAIS WHERE ID_PAIS=$id_pais) LIMIT 0,$numer_reg"; 
}  
    $result = mysql_query($query);  
    $numero_registros = mysql_num_rows($result);  
    for($k=0;$k<3;$k++){
		echo "<tr>";
		for($j=0;$j<3; $j++){
			$registro = mysql_fetch_array($result);
			echo "  
			<td align='center' valign='top'><a href='detalle_peli.php?id=".$registro['ID_PELICULA']."'><img src='icon_peli/".$registro['ID_PELICULA'].".jpg' alt='' width='170' height='243' /></a><p><a href='detalle_peli.php?id=".$registro['ID_PELICULA']."' title='premium templates'><strong>".$registro['NOMBRE']."</strong></a></p></td> ";
		} 
		echo "	</tr>  
		"; 
		
	}   
echo " 
<tr><td colspan='3'><p align='center'>$pagi_navegacion</p> </td></tr>
"; 
					
			
			
			
			
			
			
			/*
				$consulta = mysql_query("SELECT * FROM peliculas p, genero_pelicula g WHERE p.ID_PELICULA=g.ID_PELICULA AND id_pais = $id_pais", $link);
				$numero = mysql_num_rows($consulta);
				if($numero>0){
					$division = ($numero+1)/3;
					//printf($division);
					$i = round($division, 0);
					//print($i);
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
				}*/
						
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
                        	<p style="margin: 0;">CineGuys esta hecho para ver y disfrutar puliculas cultas y ganadoras de todos los tiempos.</p>
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
