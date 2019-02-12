<?php

	include('session_emple.php');
	// $pedido1 = $_SESSION['login_user'];

	

	echo "<form name='formu1' action='insertarSalario.php' method='get'>";
		
		echo "Id_Empleado <input type='text' name='idempl' size='15'/>";
		echo "<br>";
		echo "<br>";
		echo "Nuevo salario <input type='text' name='salario' size='15'/>";

	echo "<input type='submit' value='Enviar'>";

	echo "</form>";

	
	
	
?>