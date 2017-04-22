<script language="javascript">
			alert("Cerrando su session");
			//parent.arriba.location='arriba.php';
			//location.href="multiple.html";
			location.href="index.php";
</script>
<?php
	session_start();
	session_unset();
	session_destroy();
?>
