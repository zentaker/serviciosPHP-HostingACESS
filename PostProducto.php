<?php

header('Access-Control-Allow-Origin', "*");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');


include("conexion.php");
  $cn = fnconexion();
	$productName = $_POST['productName'];
	$productCompany = $_POST['productCompany'];
	$productPrice = $_POST['productPrice'];
	$productImage1 = $_POST['productImage1'];

	$rs = mysqli_query($cn,  "insert into products (productName, id_categoria,productCompany, productPrice, productImage1) values('$productName','3','$productCompany','$productPrice', '$productImage1' )");

  echo json_encode( mysqli_insert_id($cn), JSON_UNESCAPED_UNICODE);


	mysqli_close($cn);


?>
