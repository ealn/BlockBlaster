<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php
	error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
	function MiConexion()
	{
		if(!($link=mysql_connect("localhost","root","")))
		{
			echo"Error conectando al servidor.";
			exit();
		}
		if(!mysql_select_db("movies",$link))
		{
			echo"error seleccionando la base de datos.";
			exit();
		}
		mysql_query("SET NAMES 'utf8'");
		//echo "conexion correcta!";
		//mysql_query("SET NAMES 'utf8'");
		return $link;
	}
	
	//MiConexion();
	?>
</body>
</html>
=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php
	error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
	function MiConexion()
	{
		if(!($link=mysql_connect("localhost","root","")))
		{
			echo"Error conectando al servidor.";
			exit();
		}
		if(!mysql_select_db("movies",$link))
		{
			echo"error seleccionando la base de datos.";
			exit();
		}
		mysql_query("SET NAMES 'utf8'");
		//echo "conexion correcta!";
		//mysql_query("SET NAMES 'utf8'");
		return $link;
	}
	
	//MiConexion();
	?>
</body>
</html>
>>>>>>> 22adce7e1de00710e297054932abbbed77b22b2d
