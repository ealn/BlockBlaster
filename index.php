<!DOCTYPE HTML>
<html>
<head>
<title>BlockBlaster</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<link rel="stylesheet" type="text/css" href="css/login.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
</head>
 <body>
  <div class="login">
	<h1>BlockBlaster</h1>
    <form action="" method="post">
    	<input type="text" required name="username" placeholder="Username" required="required" />
        <input type="password" required name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
  </div>
    <script src="js/index.js"></script>
 </body>
</html>

<?php
session_start();

if($_POST['username'] && $_POST['password'])
{
  $user = $_POST['username'];
  $pass = $_POST['password'];

  //TODO
  /*$res = select ("SELECT id, name, rool 
          FROM usuarios
          WHERE usuario = '$user'
          AND contrasenia = '$pass'", false, ARRAY_A);

  $res = $res[0];

  //user found
  if($res['idUsuario'] > 0)
  {
    $_SESSION["usLogin"] = array('idUsuario' => $res["idUsuario"], 'nombre' => $res[0]["nombre"], 'usuario' => $res["usuario"]);
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=./main.php'>";
  }*/

  if (strcmp($user, "admin") == 0
      && strcmp($pass, "1234") == 0)
  {
    $_SESSION["usLogin"] = array('idUsuario' => "0", 'nombre' => "admin", 'type' => "admin");
    header('Location: main.php');
  }
  else if (strcmp($user, "user") == 0
           && strcmp($pass, "1234") == 0)
  {
    $_SESSION["usLogin"] = array('idUsuario' => "0", 'nombre' => "user", 'type' => "user");
    header('Location: main.php');
  }
  else
  {
    echo "Login fail";
  }
}
?>