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
$actor=$_POST["actor1"];
$actor=$_POST["actor2"];
$actor=$_POST["actor3"];
//$id=$_POST["id"];
$premio=$_POST["premio"];
$descripcion=$_POST["descripcion"];

$ingreso = mysql_query("INSERT INTO peliculas (NOMBRE, PAIS, YEAR, DESCRIPCION, DURACION, LINK) values('$nom','$pais','$descripcion','$year','$duracion','$li')",$link);
         if($ingreso){
            $buscar_id=mysql_query("select ID_PELICULA from peliculas where NOMBRE='$nom' and PAIS='$pais'");
            if ($buscar_id)
            {
                $registro=mysql_fetch_array($buscar_id);
                $id=$registro["ID_PELICULA"];
                echo "id de pelicula $id";
                //Registrar premio para pelicula
                $ingreso = mysql_query("INSERT INTO premio_pelicula(ID_PELICULA, ID_PREMIO) VALUES ($id,$premio)",$link);
                if($ingreso)
                {
                    echo "Insercion en tabla premio pelicula exitoso";
                }
                else
                    echo mysql_error().'  '.$id;
                //Registrar Actores para peliculas
                $buscar_actor = mysql_query("select ID from personajes where NOMBRE=$actor1");

                //Registrar Director para peliculas
                
                //Registrar Genero para peliculas
            }
            else
                echo mysql_error().'  '.$id;
         	//$ingreso = mysql_query("INSERT INTO premio_pelicula(ID_PELICULA, ID_PREMIO) VALUES ($id,$premio)",$link);
         }
         else
         {
             echo mysql_error().'  '.$id;
         }
         
       /*  
		if($ingreso){
			$ruta="img/";
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
					echo "Error-> $ingreso";
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