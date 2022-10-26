<?php
include('db.php');
if(isset($_POST['guardarentrega'])){

$codigo=$_POST['codigo'];
$nombre=$_POST['nombr'];
$fechan=$_POST['fechan'];
$fechai=$_POST['fechai'];
$query = "INSERT INTO ENTREGAS(id_entregador , nombre, fecha_nacimiento,fecha_ingreso ) values('$codigo','$nombre','$fechan','$fechai')";
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

