<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>
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
    header('Location: main.php');
  }
  else
  {
    echo "Login fail";
  }
}
?>