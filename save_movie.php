<?php
include("conexion.php");
$link=MiConexion();
$nom=$_POST["name"];
$pais=$_POST["pais"];
$year=$_POST["year"];
$duracion=$_POST["duracion"];
$message=$_POST["message"];
$li=$_POST["link"];
$director=$_POST["director"];
$actor1=$_POST["actor1"];
$actor2=$_POST["actor2"];
$actor3=$_POST["actor3"];
$premio=$_POST["premio"];
$genero=$_POST["genero"];
$descripcion=$_POST["descripcion"];
$ruta="images/";
$uploadfile_temporal=$_FILES['ima']['tmp_name']; 
$uploadfile_nombre="$ruta$nom.jpg";

$ingreso = mysql_query("INSERT INTO peliculas (NOMBRE, PAIS, YEAR, DESCRIPCION, DURACION, LINK, IMG) values('$nom','$pais','$year','$descripcion','$duracion','$li','$uploadfile_nombre')",$link);
         if($ingreso)
         {
            $buscar_id=mysql_query("select ID_PELICULA from peliculas where NOMBRE='$nom' and PAIS='$pais'");
            //Registrar Premio
            echo "***Registrando Premio\n";
            if ($buscar_id)
            {
                $registro=mysql_fetch_array($buscar_id);
                $id=$registro["ID_PELICULA"];
                echo "id de pelicula $id \n";
                //Registrar premio para pelicula
                $ingreso = mysql_query("INSERT INTO premio_pelicula(ID_PELICULA, ID_PREMIO) VALUES ('$id','$premio')",$link);
                if($ingreso)
                {
                    echo "Insercion en tabla premio pelicula exitoso \n";
                }
                else
                    echo mysql_error().'  '.$id;
                
                echo "***Registrando genero\n";
                //registro genero pelicula
                $ingreso = mysql_query("INSERT INTO genero_pelicula(ID_PELICULA, ID_GENERO) VALUES ('$id','$genero')",$link);
                if($ingreso)
                {
                    echo "Insercion en tabla genero pelicula exitoso \n";
                }
                else
                    echo mysql_error().'  '.$id;
            } 
            else
                echo mysql_error().'  '.$id;
            
            //Registrar Actores para peliculas
            echo "***Registrando Actor1\n";
            $ingreso1 = mysql_query("insert into personajes (NOMBRE) values('$actor1')");
            if($ingreso1)
            {
                $buscar_id=mysql_query("select ID from personajes where NOMBRE='$actor1'");
                if ($buscar_id)
                {
                    $registro=mysql_fetch_array($buscar_id);
                    $id_act1=$registro["ID"];
                    echo "id de actor1 $id_act1";
                    $ingreso1 = mysql_query("insert into actor_pelicula(ID_PELICULA, ID_PERSONAJE) values ('$id','$id_act1')");
                    if($ingreso1)
                    {
                        echo "Insercion en tabla actor_pelicula exitoso";
                    }
                    else
                        echo mysql_error().'  '.$ingreso1;
                }
                else
                        echo mysql_error().'  '.$buscar_id;
            }
            else
                        echo mysql_error().'  '.$ingreso1;
            //Registro actor2 
            echo "***Registrando Actor2\n";

            $ingreso2 = mysql_query("insert into personajes (NOMBRE) values('$actor2')");
            if($ingreso2)
            {
                $buscar_id=mysql_query("select ID from personajes where NOMBRE='$actor2'");
                if ($buscar_id)
                {
                    $registro=mysql_fetch_array($buscar_id);
                    $id_act2=$registro["ID"];
                    echo "id de actor2 $id_act2";
                    $ingreso1 = mysql_query("insert into actor_pelicula(ID_PELICULA, ID_PERSONAJE) values ('$id','$id_act2')");
                    if($ingreso2)
                    {
                        echo "Insercion en tabla actor_pelicula exitoso";
                    }
                    else
                        echo mysql_error().'  '.$ingreso2;
                }
                else
                        echo mysql_error().'  '.$buscar_id;
            }
            else
                        echo mysql_error().'  '.$ingreso2;
            //Registro Actor3
            echo "***Registrando Actor3\n";            
            $ingreso3 = mysql_query("insert into personajes (NOMBRE) values('$actor3')");
            if($ingreso3)
            {
                $buscar_id=mysql_query("select ID from personajes where NOMBRE='$actor3'");
                if ($buscar_id)
                {
                    $registro=mysql_fetch_array($buscar_id);
                    $id_act3=$registro["ID"];
                    echo "id de actor1 $id_act3";
                    $ingreso3 = mysql_query("insert into actor_pelicula(ID_PELICULA, ID_PERSONAJE) values ('$id','$id_act3')");
                    if($ingreso3)
                    {
                        echo "Insercion en tabla actor_pelicula exitoso";
                    }
                    else
                        echo mysql_error().'  '.$ingreso3;
                }
                else
                    echo mysql_error().'  '.$buscar_id;
            }
            else
                 echo mysql_error().'  '.$ingreso3;
                    
            //Registrar Director para peliculas
            echo "***Registrando director en peliculas\n";

            $ingreso4 = mysql_query("insert into personajes (NOMBRE) values('$director')");
            if($ingreso4)
            {
                $buscar_id=mysql_query("select ID from personajes where NOMBRE='$director'");
                if ($buscar_id)
                {
                    $registro=mysql_fetch_array($buscar_id);
                    $id_dir=$registro["ID"];
                    echo "id de actor1 $id_dir";
                    $ingreso4 = mysql_query("insert into director_pelicula(ID_PELICULA, ID_PERSONAJE) values ('$id','$id_dir')");
                    if($ingreso4)
                    {
                        echo "Insercion en tabla director_pelicula exitoso";
                    }
                    else
                        echo mysql_error().'  '.$ingreso4;
                }
                else
                    echo mysql_error().'  '.$buscar_id;
            }
            else
                echo mysql_error().'  '.$ingreso4;
  
			
			if (is_uploaded_file($uploadfile_temporal))
            { 
    			echo "imagen se subio....";
                move_uploaded_file($uploadfile_temporal,$uploadfile_nombre); 
				?>
                <script>
                    alert("Los datos se guardaron");
                    document.location=("upload.php");
                </script>   
                <?php
            } 
            else
            {
                ?>
                <script>
                    alert("Error");
                    setTimeout("mandar()",0);
                </script>
                <?php
            }
        }
        else
        {
            echo mysql_error().'  '.$id;
        }
?>