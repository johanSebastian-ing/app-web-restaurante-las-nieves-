<?php
include('db.php');
if(isset($_POST['guardaruser'])){

$codigo=$_POST['id'];
$nombre=$_POST['user'];
$contrasena=$_POST['pass'];
$contraasenac=$_POST['pass'];
$query = "INSERT INTO USUARIO(id , nombre, contrasena,contrasenac ) values('$codigo','$nombre','$contrasena','$contraasenac')";
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