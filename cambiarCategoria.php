<?php

	include('session_emple.php');
	// $pedido1 = $_SESSION['login_user'];

	

	echo "<form name='formu1' action='insertarCategoria.php' method='get'>";
		
		echo "Id_Empleado <input type='text' name='idempl' size='15'/>";
		echo "<br>";
		echo "<br>";
		
		
		$sqltitle="select title  from titles group by title";

		$resultado1 = mysqli_query($db, $sqltitle);

	if (mysqli_num_rows($resultado1) > 0) {

		echo "Categoria "; 

		echo "<select name='category'>";
		while ($fila = mysqli_fetch_assoc($resultado1)) {

			echo "<option>".$fila["title"]."</option>";

		}
		echo "</select>";
		echo "<br>";
		echo "<br>";
	}
	echo "<input type='submit' value='Enviar'>";

	echo "<input type='button' value='atras' onclick='history.back()'>";
	echo "</form>";

	
	
	
?>