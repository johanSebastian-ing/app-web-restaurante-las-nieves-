<?php
include('db.php');
if(isset($_POST['guardarrestaurante'])){

$codigo=$_POST['codigo'];
$nomres=$_POST['nombreres'];
$dire=$_POST['dirreccion'];

$query = "INSERT INTO restaurante(idrestaurante , nombre, dirrecion ) values('$codigo','$nomres','$dire')";
$result = mysqli_query($con,$query);
if(!$result){


die("falla de conexion");


}
else
{
    header('Location: restaurante.php');
}
}
?>
