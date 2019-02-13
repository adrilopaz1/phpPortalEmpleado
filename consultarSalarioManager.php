<?php

	include('session_emple.php');
	// $pedido1 = $_SESSION['login_user'];

	

	echo "<form name='formu1' action='consultarSalarioManager_consulta.php' method='get'>";
		
		echo "Id_Empleado <input type='text' name='idempl' size='15'/>";
		echo "<br>";
		echo "<br>";
		
	echo "<input type='submit' value='Enviar'>";

	echo "<input type='button' value='atras' onclick='history.back()'>";
	echo "</form>";

	
	
	
?>