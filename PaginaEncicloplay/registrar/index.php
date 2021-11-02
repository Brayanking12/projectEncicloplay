<!DOCTYPE html>
<html>
<head>
  <title>Registrar usuario</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilos/f1.css">
</head>
<body>
    <form method="post">
      <h1>Registrate</h1>
    <h4>Eres:</h4>
    <select class="controls" name="eres" required>
          <option value="instructor">Instructor</option>
          <option value="alumno">Alumno</option>
        </select>
        <h4>Tipo de Documento:</h4>
    <select class="controls" name="tipod" required>
          <option value="Ti">Ti</option>
          <option value="CC">CC</option>
        </select>
        <h4>Numero de documento:</h4>
      <input class="controls" type="text" name="numero"  placeholder="Numero de Documento" required>
     <h4>Nombre y apellido:</h4>
      <input class="controls" type="text" name="nombre" placeholder="Nombre y Apellido" required>
      <h4>contraseña:</h4>
      <input class="controls" type="Password" name="pass"  placeholder="pass" required>
      

        <input class="botons" type="submit"  value="Registrar"  name="registro">
      <input class="botons" type="submit"  value="consultar"   >

    </form>
        <?php
          include("ingresar.php");  
        ?>
</body>
</html>