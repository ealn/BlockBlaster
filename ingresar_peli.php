<html>
<body>
<?php
		include("conexion.php");
		$link=MiConexion();	
		@$pagi = $_GET['pagi'];
		$contar_pagi = (strlen($pagi)); 
		$numer_reg = 9;  
?>
<div id="body">
    <div id="content">
        <h2>Registrar Pelicula</h2>
        <p>&nbsp;</p>
        <fieldset>
            <legend>Agregar</legend>
        <form id="ingresar" action="guardar.php" method="post" enctype="multipart/form-data">
                <p>
                <p><label for="name">Nombre:</label>
                  <input name="name" id="name" value="" type="text" /></p>
                <p>
                <p><label for="pais">Pais:</label>
                  <input name="pais" id="pais" value="" type="text" /></p>
                <p>
                <label for="year">Año:</label>
                <input name="year" id="year" value="" type="text" />
          </p>
<p>
                <label for="duracion">Duracion (min):</label>
                <input name="duracion" id="duracion" value="" type="text" />
          </p>
                <p>
                <label for="message">Descripcion:</label>
                <textarea cols="37" rows="11" name="message" id="descripcion"></textarea></p>
                <p>
                <label for="link">Video:</label>
                <input name="link" id="link" value="" type="text" /></p>
                <p><label for="ima">Imagen:</label>
                <input type="file" name="ima" id="ima" /></p>
                
                 <p><label for="director">Director:</label>
                    <input name="director" id="director" value="" type="text" /></p>
                <p>
                <p><label for="actor">Actores:</label>
                    <input name="actor" id="actor1" value="" type="text" /></p>
                    <input name="actor" id="actor2" value="" type="text" /></p>
                    <input name="actor" id="actor3" value="" type="text" /></p>
                <p>

                <p><label for="genero">genero:</label>
                    <input name="genero" id="genero" value="" type="text" /></p>
                <p>

                 <p>
                 <label for="premio">Premio:</label>
                 <select name="premio">
                     <option value="1">Mejor actor</option>
                     <option value="2">Mejor actriz</option>
                     <option value="3">Mejor director</option>
                     <option value="4">Mejor diseño de producción</option>
                     <option value="5">Mejor fotografía</option>
                     <option value="6">Mejor guion adaptado</option>
                     <option value="7">Mejor maquillaje y peinado</option>
                     <option value="8">Mejor película</option>
                     <option value="9">Mejor sonido</option>
                     <option value="10">Mejor cortometraje animado</option>
                     <option value="11">Mejor cortometraje de ficción</option>
                     <option value="12">Mejor canción original</option>
                     <option value="13">Mejor montaje</option>
                     <option value="14">Mejor actor de reparto</option>
                     <option value="15">Mejor actriz de reparto</option>
                     <option value="16">Mejor guion original</option>
                     <option value="17">Mejor documental</option>
                     <option value="18">Mejor documental largo</option>
                     <option value="19">Mejor diseño de vestuario</option>
                     <option value="20">Mejor película de habla no inglesa</option>
                     <option value="21">Mejor edición de sonido</option>
                     <option value="22">Mejor banda sonora</option>
                 </select>
                 <p>
                <p><input name="send" style="margin-left: 150px;" class="formbutton" value="Guardar" type="submit" /></p>
            </form>
            </fieldset>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>         
</div>
</body>
</html>
