<?php session_start();


//aqui empieza el carrito
if(isset($_SESSION['carrito']) || isset($_POST['nombre'])){
	if(isset($_SESSION['carrito'])){
		$carrito_venta=$_SESSION['carrito'];
		if(isset($_POST['nombre'])){
			$titulo=$_POST['nombre'];
			$precio=$_POST['precio'];
			$cantidad=$_POST['cantidad'];
			$ref=$_POST['ref'];
			$donde=-1;
			for($i=0;$i<=count($carrito_venta)-1;$i ++){
			   if($ref==$carrito_venta[$i]['ref']){
			   	  //Quitamos esta linea para que no aumente la cantidad y genere una linea nueva
			   //	$donde=$i;
			   }
			}
			if($donde != -1){
				$cuanto=$carrito_venta[$donde]['cantidad'] + $cantidad;
				$carrito_venta[$donde]=array("nombre"=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad,"ref"=>$ref);
			}else{
				$carrito_venta[]=array("nombre"=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad,"ref"=>$ref);
			}
		}
	}else{
		$titulo=$_POST['nombre'];
		$precio=$_POST['precio'];
		$cantidad=$_POST['cantidad'];
		$ref=$_POST['ref'];
		$carrito_venta[]=array("nombre"=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad,"ref"=>$ref);	
	}
	if(isset($_POST['cantidad'])){
		$id=$_POST['id'];
		$cuantos=$_POST['cantidad'];
		if($cuantos<1){
			$carrito_venta[$id]=NULL;
		}else{
			$carrito_venta[$id]['cantidad']=$cuantos;


		}
	}
	if(isset($_POST['id2'])){
		$id=$_POST['id2'];
		$carrito_venta[$id]=NULL;
	}
	


$_SESSION['carrito']=$carrito_venta;
}
//aqui termina el carrito




if(isset($_SESSION['carrito'])){

for($i=0;$i<=count($carrito_venta)-1;$i ++){
if($carrito_venta[$i]!=NULL){ 
$totalc = $carrito_venta['cantidad'];
$totalc ++ ;
$totalcantidad += $totalc;
}}}





header("Location: ".$_SERVER['HTTP_REFERER']."");
?>



