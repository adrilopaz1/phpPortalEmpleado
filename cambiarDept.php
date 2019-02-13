<?php

	include('session_emple.php');
	// $pedido1 = $_SESSION['login_user'];

	

	echo "<form name='formu1' action='insertarEmpleDepart.php' method='get'>";
		
		$sqlDpt="select dept_name  from departments";

		$resultado1 = mysqli_query($db, $sqlDpt);

	if (mysqli_num_rows($resultado1) > 0) {

		echo "Cambio de Departamento "; 

		echo "<select name='depart'>";
		while ($fila = mysqli_fetch_assoc($resultado1)) {

			echo "<option>".$fila["dept_name"]."</option>";

		}
		echo "</select>";
		echo "<br>";
		echo "<br>";
		// seleccion del empleado

		echo "Id_Empleado <input type='text' name='idempl' size='15'/>";
		echo "<br>";
		echo "<br>";
		}

	echo "<input type='submit' value='Enviar'>";
	echo "<input type='button' value='atras' onclick='history.back()'>";
	echo "</form>";

	
	
	
?>