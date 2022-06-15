<?php       // que onda pa'   ey XD jajajaaja     andaba comiendo, meet? 
  
  

  
$lista=$_POST['lista']; 
$nombre=$_POST['nom'];
$img=$_POST['imagen'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['Precio'];

include_once ("configuracion/Conexion.php");
$conexion=mysqli_connect("localhost","root","","Proyectojimmy");
$cod = "";
$sql_consulta ="SELECT * FROM carnicos where nombre='$nombre'";

$resultado=mysqli_query($conexion,$sql_consulta);
$filas= mysqli_num_rows($resultado);

switch( $lista )
{
    ////////////  LACTEOS
    case 1:
        $sql_insertar = "INSERT INTO lacteos( nombre, img, cantidad, precio) VALUES ('$nombre','$img','$cantidad','$precio')";

        if(!$dbh->query( $sql_insertar))
        {   
            echo "Ha ocurrido un error";
        }else
        {
            //Todo estuvo okay
            print "<script>alert('Inscripción realizada correctamente');window.location.href='subirIMG.html'</script>";
        }
        break;
    
    ////////////  GRANOS
    case 2:
        $sql_insertar = "INSERT INTO grano( nombre, img, cantidad, precio) VALUES ('$nombre','$img','$cantidad','$precio')";

        if(!$dbh->query( $sql_insertar))
        {   
            echo "Ha ocurrido un error";
        }else
        {
            //Todo estuvo okay
            print "<script>alert('Inscripción realizada correctamente');window.location.href='subirIMG.html'</script>";
        }
        break;

    ////////////  CARNICOS
    case 3:
        $sql_insertar = "INSERT INTO carnicos( nombre, img, cantidad, precio) VALUES ('$nombre','$img','$cantidad','$precio')";

        if(!$dbh->query( $sql_insertar))
        {   
            echo "Ha ocurrido un error";
        }else
        {
            //Todo estuvo okay
            print "<script>alert('Inscripción realizada correctamente');window.location.href='subirIMG.html'</script>";
        }
        break;

    ////////////  ASEO
    case 4:
        $sql_insertar = "INSERT INTO aseo( nombre, img, cantidad, precio) VALUES ('$nombre','$img','$cantidad','$precio')";

        if(!$dbh->query( $sql_insertar))
        {   
            echo "Ha ocurrido un error";
        }else
        {
            //Todo estuvo okay
            print "<script>alert('Inscripción realizada correctamente');window.location.href='subirIMG.html'</script>";
        }
        break;

    ////////////  ASEO PERSONAL
    case 5:
        $sql_insertar = "INSERT INTO aseo_personal( nombre, img, cantidad, precio) VALUES ('$nombre','$img','$cantidad','$precio')";

        if(!$dbh->query( $sql_insertar))
        {   
            echo "Ha ocurrido un error";
        }else
        {
            //Todo estuvo okay
            print "<script>alert('Inscripción realizada correctamente');window.location.href='subirIMG.html'</script>";
        }
        break;

    ////////////  BEBIDAS
    case 6:
        $sql_insertar = "INSERT INTO bebidas( nombre, img, cantidad, precio) VALUES ('$nombre','$img','$cantidad','$precio')";

        if(!$dbh->query( $sql_insertar))
        {   
            echo "Ha ocurrido un error";
        }else
        {
            //Todo estuvo okay
            print "<script>alert('Inscripción realizada correctamente');window.location.href='subirIMG.html'</script>";
        }
        break;

    ////////////  MEDICAMENTOS
    case 7:
        $sql_insertar = "INSERT INTO medicamentos( nombre, img, cantidad, precio) VALUES ('$nombre','$img','$cantidad','$precio')";

        if(!$dbh->query( $sql_insertar))
        {   
            echo "Ha ocurrido un error";
        }else
        {
            //Todo estuvo okay
            print "<script>alert('Inscripción realizada correctamente');window.location.href='subirIMG.html'</script>";
        }
        break;

    ////////////  GOLOCINAS
    case 8:
        $sql_insertar = "INSERT INTO golosinas( nombre, img, cantidad, precio) VALUES ('$nombre','$img','$cantidad','$precio')";

        if(!$dbh->query( $sql_insertar))
        {   
            echo "Ha ocurrido un error";
        }else
        {
            //Todo estuvo okay
            print "<script>alert('Inscripción realizada correctamente');window.location.href='subirIMG.html'</script>";
        }
        break;;

}



    //Todo estuvo okay
   // $sql_insertar = "INSERT INTO usuario(nombre, nombre, contraseña) VALUES ($documento,'$nombre ','$contrasena ')";


?>