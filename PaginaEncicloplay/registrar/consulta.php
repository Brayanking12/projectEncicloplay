<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Consultados</title>
</head>
<body>
<?php
    include ("conexion.php");
        $registro=mysqli_query($conn,"select eres,tipod,numrdoc,nombape,pass from personas") or
        die("problemas en la consulta:".mysqli_error($conn));
    ?>
    <h1>Los Datos de los Aprendices Son:</h1>
    <?php
while($reg=mysqli_fetch_array($registro)){
        echo "Genero:" .$reg['eres'] ."<br>";
        echo "Numero Documento:" .$reg['tipod'] ."<br>";
        echo "Nombres y Apellidos:" .$reg['numrdoc'] ."<br>";
        echo "Especialidad:" .$reg['nombape'] ."<br>";
        echo "Jornada:" .$reg['pass'] ."<br>";


        echo "<br>";

    }

mysqli_close($conn);
?>
    
</body>
</html>