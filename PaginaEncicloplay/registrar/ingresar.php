<?php
include ("conexion.php");
$resultado=2;
if(isset($_POST['registro'])){
  $eres=($_REQUEST['eres']);
$tipod=($_REQUEST['tipod']);
$numrdoc=($_POST['numero']);
$nombape=($_POST['nombre']);
     $pass=($_POST['pass']);
     $consulta="insert into personas (eres,tipod,numrdoc,nombape,pass) values ('$eres','$tipod','$numrdoc','$nombape','$pass')";
        $resultado=mysqli_query($conn,$consulta);
        if($resultado==1){
                echo "<br>";
                die("El usuario se ha registrado!...");
}else{
                if($resultado<1){
                        echo "<br>";
                        die("El usuario ¡No! se pudo registrar... Revisar Error");
                }
            }
    }
    mysqli_close($conn);
    ?>