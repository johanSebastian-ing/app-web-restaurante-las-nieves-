<?php
include('db.php');
if(isset($_POST['guardarpedido'])){

$codigo=$_POST['codigo'];

$idplato=$_POST['idplato'];
$fechap=$_POST['fecha_pedido'];
$diren=$_POST['dirreccion'];
$identre=$_POST['id_entregador'];
$query = "INSERT INTO PEDIDOS(id ,idplato, fecha_pedido,Dirrecion_entrega ,id_entregador  ) values('$codigo','$idplato','$fechap','$diren','$identre')";
$result = mysqli_query($con,$query);
if(!$result){
  	

die("falla de conexion");


}
else
{
    header('Location: index.php');
}
}
?>