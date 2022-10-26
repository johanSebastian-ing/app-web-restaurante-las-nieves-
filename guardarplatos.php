<?php
include('db.php');
if(isset($_POST['guardarplato'])){

$codigo=$_POST['codigo'];
$idres=$_POST['idrestaurante'];
$nombre=$_POST['nombrep'];
$precio=$_POST['precio'];
$query = "INSERT INTO PLATOS(idplato , idrestaurante, nombre,precio ) values('$codigo','$idres','$nombre','$precio')";
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
