<?php
  
$nombre=$_POST["Nom"];
$documento=$_POST["Cedula"];
$contrasena=$_POST["Contra"];


include_once ("configuracion/Conexion.php");
$conexion=mysqli_connect("localhost","root","","Proyectojimmy");
$cod = "";
$sql_consulta ="SELECT * FROM usuario where documento='$documento'";

$resultado=mysqli_query($conexion,$sql_consulta);
$filas= mysqli_num_rows($resultado);



//$sql_consulta = "SELECT * FROM usuario where documento='$documento'";

if( $filas>0)
{   
    //Todo estuvo >:(
    print "<script>alert('La cedula ya esta registrada');window.location.href='crearusuario.html'</script>";

}else
{
    //Todo estuvo okay
    $sql_insertar = "INSERT INTO usuario(documento, nombre, contraseña) VALUES ($documento,'$nombre ','$contrasena ')";
    


    if(!$dbh->query( $sql_insertar))
    {   
        echo "Ha ocurrido un error";
    }else
    {
        //Todo estuvo okay
        print "<script>alert('Inscripción realizada correctamente');window.location.href='index.html'</script>";
    }
}




?>