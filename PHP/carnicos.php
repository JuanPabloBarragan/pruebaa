<?php   session_start();
include_once("../configuracion/Conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARMAJUCRI</title>
    <link rel="shortcut icon" href="IMG/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/estilos_prod.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

<script src="../Alert/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../Alert/sweetalert.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

 <!-- ESTILO CURSOS DE PROGRAMACION -->
 <link rel="stylesheet" href="../css/style_cp.css">


</head>
<body>
<nav>

<style>
.container_card{    margin: 0 auto;    padding:  0px 20px 20px 20px;    display: grid;    /* width: 800px; */    grid-template-columns: 1fr 1fr ;   grid-gap:1em;        /* grid-row-gap: 60px; */}
.blog-post{    position: relative;    margin-bottom: 15px;}
.blog-post img{    width: 100%;    height: 450px;    object-fit: cover;    border-radius: 10px;    }
.blog-post .category{    position: absolute;    top: 20px;    left: 20px;    padding: 10px 15px;  font-size: 14px; z-index: 999;   text-decoration: none;    background-color: #f238dc;    color: #fff;    border-radius: 5px;    box-shadow: 1px 1px 8px rgba(0,0,0,0.1);    text-transform: uppercase;}
.text-content{    position: absolute;    bottom: -30px;    padding: 20px;    background-color: #fff;    width: calc(100% - 20px);    left: 50%;    transform: translateX(-50%);    border-radius: 10px;    box-shadow: 1px 1px 8px rgba(0,0,0,0.08);/* padding-top: 50px; */}
.text-content h2{    font-size: 20px;    font-weight: 400;    /* margin-bottom: 30px; */}
.text-content img{    height: 70px;    width: 70px;    border: 5px solid rgba(0,0,0,0.1);    border-radius: 50%;    position: absolute;    top: -35px;    left: 35px;}
.tags a{    color: #888;    font-weight: 700;    text-decoration: none;    margin-right: 15px;    transition: 0.3s ease;}
.tags a:hover{    color: #000;}
@media screen and (max-width: 1100px) {    .container_card{        grid-template-columns: 1fr 1fr;        grid-row-gap: 60px;    }}
@media screen and (max-width: 600px) {    .container_card{        grid-template-columns: 1fr;        grid-row-gap: 60px;    }}
</style>

</nav>
<!-- NAVBAR -->
<?php

include("carro.php");
include("modelo.php");
?>



<div>

<?php
$conexion=mysqli_connect("localhost","root","","Proyectojimmy");
//$conexion=include_once("../configuracion/Conexion.php");
$busquedad=mysqli_query($conexion,"SELECT * FROM carnicos");
$numero =mysqli_num_rows($busquedad);


?>

    <main class="main">
        <div class="container">
        <h2 class="main-title">-Resultados(<?php echo $numero; ?>)-</h2>
            <section class="container-products">

            <?php   while($resultado =mysqli_fetch_assoc($busquedad) ){   ?>
                <div class="product">
                    <div class="blog-post ">
                        <a class="category">
                            $<?php echo $resultado["precio"]; ?>
                        </a>
                    </div>
                    <img src="../IMG_PROD/CARNICOS/<?php echo $resultado["img"];?>">
                    <form id="formulario" name="formulario" method="POST" action="cart.php">
                        <input name="ref" type="hidden" id="ref" value="<?php echo $resultado["id"]; ?>" />   
                        <input name ="precio" type="hidden" value="<?php echo $resultado["precio"] ;?>"/>
                        <input name ="nombre" type="hidden" value="<?php echo $resultado["nombre"] ;?>"/>
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                    <div class="product__description">
                        <h5 class="product__title"><?php echo $resultado["nombre"]; ?></h5>
                        <h5 class="card-title">  Unidades Disponibles <br><?php echo $resultado["cantidad"]; ?></h5>
                        <button class="form_submit" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                   
                    </form>
                    </div>
                </div>
                <?php }?>
            </section>
        </div><br><br><br>
    </main>
</div>
<footer>
		<div class="contenedor-footer">
			<div class="content-foo">
				<h4>CONTÁCTANOS</h4>
				<p>3125872318</p>
				<p>carmajucri@gmail.com</p>
			</div>
		</div>
		<h2 class="titulo-final">Carmajucri - Tienda Virtual</h2><br>
	</footer>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
</body>
</html>