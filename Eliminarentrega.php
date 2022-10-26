<?php
include('db.php');
if(isset($_GET['id'])){

$id = $_GET['id'];
$query = "DELETE FROM ENTREGAS WHERE id_entregador = '$id'";
$result = mysqli_query($con,$query);
if(!$result){


die("falla de conexion");


}
else
{
    header('Location: entregas.php');
}
}
?>