<?php
include('db.php');
if(isset($_GET['id'])){

$id = $_GET['id'];
$query = "DELETE FROM PLATOS WHERE idplato = '$id'";
$result = mysqli_query($con,$query);
if(!$result){


die("falla de conexion");


}
else
{
    header('Location: platos.php');
}
}
?>