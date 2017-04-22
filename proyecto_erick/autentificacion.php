<?php
session_start();
//vemos si el usuario y contraseña son válidos
include("conexion.php");
$link = MiConexion();
$usuario= $_POST["usu"];
$pass = $_POST["con"];

$resultado=mysql_query("select * from usuario WHERE NOMBRE='$usuario'", $link);
$row = mysql_fetch_array($resultado);
$registro=mysql_num_rows ($resultado);
if($registro==0){
	?>
    <script language="javascript">
			alert("Error usuario y/o contraseña invalido(s) ");
			location.href="iniciar.php";
		</script>
    <?php
	//header("Location: cuenta.php");
}else{
	if($pass==$row["PASSWORD"]){
		$_SESSION["usuario"]=$row["ID"];
		?>
        <script language="javascript">
			alert("Bienvenido!");
			//parent.arriba.location="arriba.php";
			//location.href="multiple.html";
			//leftFrame.location='principal.php';
			location.href="administrador.php";
		</script>
        <?php
		//header("Location: arriba.php target:arriba");
		//header("Location: contenido.html");
		//header("Refresh: 1; URL='multiple.html'");
		
	}else{
		?>
		<script language="javascript">
			alert("Error usuario y/o contraseña invalido(s) ");
			location.href="iniciar.php";
			//parent.arriba.location='iniciar.php';
		</script>
        <?php
	}
}



#if ($_POST["usuario"]=="usuario" && $_POST["contrasena"]=="123"){
//usuario y contraseña válidos
//se define una sesion y se guarda el dato session_start();
#$_SESSION["autenticado"]= "SI";
#header ("Location: cuenta.php");
#}else {
//si no existe se va a login.php
#header("Location: login.php?errorusuario=si");
#}
?>