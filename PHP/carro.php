<link rel="stylesheet" href="../CSS/estilos_prod.css">
<?php
if(isset($_SESSION['carrito'])){
$carrito_venta=$_SESSION['carrito'];
}

if(isset($_SESSION['carrito'])){
  for($i=0;$i<=count($carrito_venta)-1;$i ++){
      if(isset($carrito_venta[$i])){
      if($carrito_venta[$i]!=NULL){ 
      if(!isset($carrito_venta['cantidad'])){$carrito_venta['cantidad'] = '0';}else{ $carrito_venta['cantidad'] = $carrito_venta['cantidad'];}
      $total_cantidad = $carrito_venta['cantidad'];
  $total_cantidad ++ ;
  if(!isset($totalcantidad)){$totalcantidad = '0';}else{ $totalcantidad = $totalcantidad;}
  $totalcantidad += $total_cantidad;
  }}}
}
     //declaramos variables
      if(!isset($totalcantidad)){$totalcantidad = '';}else{ $totalcantidad = $totalcantidad;}
 ?>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: hsla(318, 100%, 74%, 0.589);">
<div class="container-fluid">
    <a class="navbar-brand" href="#">CARMAJUCRI</a>
    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: white; cursor:pointer;"><i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <nav>
            <a href="../home.php">     Inicio     </a>
            <a href="lacteos.php">     Lacteos   </a>
            <a href="granos.php">     Granos     </a>
            <a href="carnicos.php">     Carnicos     </a>
            <a href="aseo.php">     Aseo     </a>
            <a href="aseoper.php">     Aseo Personal     </a>
            <a href="bebidas.php">     Bebidas     </a>
            <a href="medicamentos.php">     Medicamentos     </a>
            <a href="golocinas.php">     Golocinas     </a>
		        </nav>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END NAVBAR -->