<<<<<<< HEAD
<?php
require('class.phpmailer.php'); 
require_once('class.smtp.php');
if ( isset ($_POST['Submit']))
{
// recibimos los valores ingresados en los campos del formulario
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

// verificamos que nuestras variables no tengan valores en blanco de lo contrario imprimiremos un mensaje para que se ingresen los valores faltantes
if($name != '' && $email != '' && $subject != '' && $message != '')
{
$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "user@mail.com"; // nombre de usuario SMTP desde el cual se enviara el correo
$mail->Password = "password"; // contraseña de SMTP
$mail->From = "";
$mail->FromName = "Usuario Ganador";
$mail->AddAddress('user@mail.com'); // direccion de correo al cual enviaremos el mensaje
$mail->Subject = "Las Nuevas Pelis que quieren son:";
// en la variable body almacenaremos el cuerpo del mensaje en este caso mostraremos una tabla con los datos capturados desde nuestro formulario.
$body = "<head></head>
<body>
<table>
<table  border=1 width=200>

<tr>
<td>Ahi peticiones nuevas: </td>
<td>".$name."</td>
</tr>
<tr>
<td>el correo del usuario es:</td>
<td>".$email."</td>

</tr>

<tr>
<td>EL motivo es:</td> 
<td>".$subject."</td>
</tr>

<tr>
<td>Mensaje enviado:</td>
<td>".$message."</td>
</tr>

</table>
</table>
</body>
</html>";
$mail->MsgHTML($body);
if(!$mail->Send())
{
$mensaje = "No se pudo enviar el correo electrónico, intentelo de nuevo";
}
else
{
$mensaje="El correo se ha enviado correctamente";
}
}
else
{
$mensaje="No deje campos en blanco.";
}
}

?>
<SCRIPT LANGUAGE=javascript>
   window.history.go(-1)
</SCRIPT>


=======
<?php
require('class.phpmailer.php'); 
require_once('class.smtp.php');
if ( isset ($_POST['Submit']))
{
// recibimos los valores ingresados en los campos del formulario
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

// verificamos que nuestras variables no tengan valores en blanco de lo contrario imprimiremos un mensaje para que se ingresen los valores faltantes
if($name != '' && $email != '' && $subject != '' && $message != '')
{
$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "user@mail.com"; // nombre de usuario SMTP desde el cual se enviara el correo
$mail->Password = "password"; // contraseña de SMTP
$mail->From = "";
$mail->FromName = "Usuario Ganador";
$mail->AddAddress('user@mail.com'); // direccion de correo al cual enviaremos el mensaje
$mail->Subject = "Las Nuevas Pelis que quieren son:";
// en la variable body almacenaremos el cuerpo del mensaje en este caso mostraremos una tabla con los datos capturados desde nuestro formulario.
$body = "<head></head>
<body>
<table>
<table  border=1 width=200>

<tr>
<td>Ahi peticiones nuevas: </td>
<td>".$name."</td>
</tr>
<tr>
<td>el correo del usuario es:</td>
<td>".$email."</td>

</tr>

<tr>
<td>EL motivo es:</td> 
<td>".$subject."</td>
</tr>

<tr>
<td>Mensaje enviado:</td>
<td>".$message."</td>
</tr>

</table>
</table>
</body>
</html>";
$mail->MsgHTML($body);
if(!$mail->Send())
{
$mensaje = "No se pudo enviar el correo electrónico, intentelo de nuevo";
}
else
{
$mensaje="El correo se ha enviado correctamente";
}
}
else
{
$mensaje="No deje campos en blanco.";
}
}

?>
<SCRIPT LANGUAGE=javascript>
   window.history.go(-1)
</SCRIPT>


>>>>>>> 22adce7e1de00710e297054932abbbed77b22b2d
