<?php
	$mysqli = new mysqli("localhost", "root", "", "todo");
	if ($mysqli->connect_errno) {
    	echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$mysqli->set_charset("utf8");
	$resultado = $mysqli->query("SELECT id, todo FROM todo");
	$datos = array();
	$num_todo=0;
	while ($fila = $resultado->fetch_assoc()) {
		$num_todo++;
		$id = $fila['id'];
	  $todo = $fila['todo'];
	  $datos[$id] = $todo;
	}
?>
