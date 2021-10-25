<?php 
include("conexion.php")
 ?>
<h1  align="center">listado de aprendices</h1>
 <table width="70%"border="1" align="center">
 <tr>
 	<td>eres</td>
 	<td>tipo de documento</td>
 	<td>numero de documento</td>
 	<td>nombre y apellido</td>
 	<td>contraseña</td>
 </tr>
 <?php
$registro=mysqli_query($conn,"select eres,tipod,numrdoc,nombape,pass from personas") or
die("problemas en la consulta:".mysqli_error($conn));
?>
<?php
while($reg=mysqli_fetch_array($registro))
{
    ?>
    <tr>
    <td><?php echo $reg['eres']?> </td>
    <td><?php echo $reg['tipod']?> </td> 
    <td><?php echo $reg['numrdoc']?> </td>
    <td><?php echo $reg['nombape']?> </td>
    <td><?php echo $reg['pass']?> </td>
    </tr>
    <?php
}
?>
</table>
<?php
mysqli_close($conn);

?>
<a href="http://localhost/resgistrar/index.php"></a><input class="botons" type="submit"  value="Registrar"  name="registro">
