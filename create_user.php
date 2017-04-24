<?php
session_start();
include("conexion.php");
$link=MiConexion();
if($_POST['username'] && $_POST['password'] && $_POST['repeat_password'])
{
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $reppass = $_POST['repeat_password'];

  if(!strcmp($pass,$reppass))
  {
       $new_user = mysql_query("INSERT INTO usuario (NOMBRE, PASSWORD) values('$user','$pass')"); 
       if($new_user)
       {
         ?>
        <script>
            alert("Usuario registrado exitosamente");
            document.location=("user_registration.php");
        </script>
        <?php  
       }
       else
           echo mysql_error().'  '.$new_user;
  }
  else 
  {
        ?>
        <script>
            alert("Error, Passwords no coinciden");
            document.location=("user_registration.php");
        </script>
        <?php
  }
}
?>