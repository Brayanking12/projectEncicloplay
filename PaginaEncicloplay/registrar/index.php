
<!DOCTYPE html>
<html>
<head>
  <title>Registrar usuario</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilos/f1.css">
</head>
<body>
    <form method="post">
      <?php
        $eres="";
        $tipod="";
        $numero="";
        $nombre="";
        $apellido="";
        $genero="";
        $grado="";
        $pass="";
        if(isset($_POST['nombre'])){
          $eres= $_REQUEST['eres'];
          $tipod= $_REQUEST['tipod'];
          $numero= $_POST['numero'];
          $nombre= $_POST['nombre'];
          $apellido= $_POST['apellido'];
          $genero= $_REQUEST['genero'];
          $grado= $_POST['grado'];
          $pass= $_POST['pass'];
          $campos = array();

          if($eres==""){
             array_push($campos,"El campo eres no puede estar vacio");
          }
          if($tipod==""){
            array_push($campos,"El campo tipo de documento no puede estar vacio");
          }
          if($numero==""){
            array_push($campos,"El campo numero de documento no puede estar vacio");
          }
          if($nombre==""){
            array_push($campos,"El campo nombre de documento no puede estar vacio");
          }
          if($apellido==""){
            array_push($campos,"El campo apellido de documento no puede estar vacio");
          }
          if($genero==""){
            array_push($campos,"El campo genero de documento no puede estar vacio");
          }
          if($grado==""){
            array_push($campos,"El campo grado de documento no puede estar vacio");
          }
          if($pass==""){
            array_push($campos,"El campo grado de password no puede estar vacio, ni tener menos de 6caracteres ");
          }

          if(count($campos) >0){
            echo"<div class='error'>";
            for($i =0; $i < count($campos); $i++){
              echo"<li>".$campos[$i]."</li>";
            }
          
          }else{
            echo"div class='correcto'>
                   datos correctos ";
          }

          echo"</div>";


        }

      ?>
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
     <h4>Nombres:</h4>
      <input class="controls" type="text" name="nombre" placeholder="Nombres" required>
      <h4>Apellidos:</h4>
      <input class="controls" type="text" name="apellido" placeholder=" Apellidos" required>
      <select class="controls" name="genero" required>
          <option value="Mujer">Mujer</option>
          <option value="Hombre">Hombre</option>
        </select>
        <h4>Grado:</h4>
      <input class="controls" type="text" name="grado" placeholder="¿En que grado estas?" required>
      <h4>contraseña:</h4>
      <input class="controls" type="Password" name="pass"  placeholder="pass" required>
      

        <input class="botons" type="submit"  value="Registrar"  name="registro">
      <input class="botons" type="submit"  value="consultar" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  >

    </form>
         <?php
          include("ingresar.php");  
        ?>

 

</body>
</html>