<?php

	header('Access-Control-Allow-Origin: *');


  include("conexion.php");
  $cn = fnconexion();

	$rs = mysqli_query($cn, "select id_producto, productName, productCompany, productPrice, productImage1 from products");
	while ($row = mysqli_fetch_assoc($rs)) {
		$res[] = $row;
	}
	echo json_encode($res, JSON_UNESCAPED_UNICODE);
	mysqli_close($cn)



?>


