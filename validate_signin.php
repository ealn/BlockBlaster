<?php
session_start();
include("conexion.php");
$link=MiConexion();
if($_POST['username'] && $_POST['password'])
{
  $user = $_POST['username'];
  $pass = $_POST['password'];
  //TODO
  $res = mysql_query("select * from usuario where NOMBRE='$user' and PASSWORD='$pass'");
  if($res)
    {
        $registro=mysql_fetch_array($res);
        $tipo=$registro["TIPO"];
        if (strcmp($user, $registro["NOMBRE"]) == 0
        && strcmp($pass, $registro["PASSWORD"]) == 0)
        {
            
            $_SESSION["usLogin"] = $tipo;              
            ?>
            <script>
            document.location=("main.php");
            </script>
            <?php
            
        }
        else 
        {
            ?>
		    <script>
				alert("Login fail");
				document.location=("index.php");
			</script>
            <?php
        }
    }
  else
  {
    echo mysql_error().'  '.$res; 
  }
}
?>