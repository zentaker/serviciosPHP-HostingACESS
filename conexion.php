<?php

function fnconexion() {
  $cn = mysqli_connect("localhost", "u472085672_isil", "Palomino12345" )or die ("error al conectar a la bd".mysql_error());

	$bd = mysqli_select_db($cn, "u472085672_isilPC3" );

  return $cn;
}


?>
