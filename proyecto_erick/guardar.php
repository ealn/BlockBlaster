<?php
include("conexion.php");
$link=MiConexion();
$nom=$_POST["name"];
$pais=$$_POST["pais"];
$year=$_POST["year"];
$duracion=$_POST["duracion"];
$message=$_POST["message"];
$li=$_POST["link"];
$director=$_POST["director"];
$actor=$_POST["actor"];
$id=$_POST["id"];
$premio=$_POST["premio"];

$ingreso = mysql_query("INSERT INTO peliculas (NOMBRE, PAIS, YEAR, DURACION, LINK) values('$nom','$pais','$year',$duracion,)",$link);
         if($ingreso){
         	$ingreso = mysql_query("INSERT INTO premio_pelicula(ID_PELICULA, ID_PREMIO) VALUES ($id,$premio)",$link);
         }
		if($ingreso){
			$ruta="./icon_peli/";
			$consulta = mysql_query("select * from peliculas WHERE NOMBRE = '$nom' ",$link);
			$registro = mysql_fetch_array($consulta);
			$name = $registro["ID_PELICULA"];
			$uploadfile_temporal=$_FILES['ima']['tmp_name']; 
			$uploadfile_nombre="$ruta$name.jpg";
			if (is_uploaded_file($uploadfile_temporal)){ 
    			move_uploaded_file($uploadfile_temporal,$uploadfile_nombre); 
				?>
		    <script>
				alert("Los datos se guardaron");
				document.location=("ingresar_peli.php");
			</script>
    <?php	
			} 
		}else{
	?>
			<script>
				alert("Error");
				function mandar(){
					window.history.back();
				}
				setTimeout("mandar()",0);
			</script>
    <?php
	}

/*
$directorio=opendir("icon_peli/"); 
while($ficheros=readdir($directorio)) 
{ 
    $url="icon_peli/".$ficheros; 
    echo "<img src=".$url.">"; 
} 
*/
?>