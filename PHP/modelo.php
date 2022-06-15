<link rel="stylesheet" href="../CSS/estilos_prod.css">
<!-- MODAL CARRITO -->
<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carrito De Compras</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   
   
     
			<div class="modal-body">
				<div>
					<div class="p-2">
						<ul class="list-group mb-3">
							<?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_venta)-1;$i ++){
                                if(isset($carrito_venta[$i])){
                                if($carrito_venta[$i]!=NULL){
							?>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div class="row col-12" >
									<div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $carrito_venta[$i]['cantidad'] ?> : <?php echo $carrito_venta[$i]['nombre']; // echo substr($carrito_venta[$i]['nombre'],0,10); echo utf8_decode($nombremostrado)."..."; ?></h6>
									</div>
									<div class="col-6 p-0"  style="text-align: right; color: #000000;" >
									<span class="text-muted"  style="text-align: right; color: #000000;">$ <?php echo $carrito_venta[$i]['precio'] * $carrito_venta[$i]['cantidad'];    ?> </span>
									</div>
								</div>
							</li>
							<?php
							$total=$total + ($carrito_venta[$i]['precio'] * $carrito_venta[$i]['cantidad']);
							}
                            }
							}
							}
							?>
							<li class="list-group-item d-flex justify-content-between">
							<span  style="text-align: left; color: #000000;">Total</span>
							<strong  style="text-align: left; color: #000000;"><?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_venta)-1;$i ++){
                                if(isset($carrito_venta[$i])){
							if($carrito_venta[$i]!=NULL){ 
							$total=$total + ($carrito_venta[$i]['precio'] * $carrito_venta[$i]['cantidad']);
                            }
							}}}
                            if(!isset($total)){$total = '0';}else{ $total = $total;}
							echo $total; ?>$</strong>
							</li>
						</ul>
					</div>
				</div>
			</div>
			


      </div>
      <div class="modal-footer">
     
      	<button type="button" class="btn_cerrar" data-bs-dismiss="modal"><center>Cerrar</center></button>
        <a type="button" class="btn_vaciar" href="borrar_carro.php"><center>Vaciar carrito</center></a>
        <a type="button" class="btn_seguir" href="modificar_cart.php"><center>Continuar pedido</center></a>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL CARRITO -->