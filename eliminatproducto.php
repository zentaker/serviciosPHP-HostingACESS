<?php

header('Access-Control-Allow-Origin', "*");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

include("conexion.php");
$cn = fnconexion();

	$id_producto = $_POST['id_producto'];


	$rs = mysqli_query($cn,  " delete from products where  id_producto='$id_producto' ");



	mysqli_close($cn);


?>
