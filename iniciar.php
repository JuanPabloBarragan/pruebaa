<?php
  
$cedula=$_POST["cedula"];
$contrasena=$_POST["contra"];



include_once ("configuracion/Conexion.php");
$conexion=mysqli_connect("localhost","root","","Proyectojimmy");
$cod = "";
$sql_consulta ="SELECT * FROM usuario where documento='$cedula' and contraseña='$contrasena'";

$resultado=mysqli_query($conexion,$sql_consulta);
$filas= mysqli_num_rows($resultado);

if($filas>0)
{   
    //Todo estuvo okay
    header("location:home.php");
    
}else
{
    //Todo estuvo >:(
    print "<script>alert('Datos incorrectos ');window.location.href='index.html'</script>";
    
}




?>