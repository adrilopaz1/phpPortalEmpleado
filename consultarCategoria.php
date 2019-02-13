<?php

	include('session_emple.php');
	
	$idemp = $_SESSION['id'];

	
		$sql="select employees.first_name, title 
		from employees, titles
		where  employees.emp_no=titles.emp_no and employees.emp_no=$idemp";

		$resultado1 = mysqli_query($db, $sql);

	if(mysqli_num_rows($resultado1) > 0) {
    // output data of each row
		echo "<TABLE border=1>";
		echo "<tr>";
			echo "<td>Nombre</td>";
			echo "<td>Categoria</td>";
		echo "</tr>";
	
    while($row = mysqli_fetch_assoc($resultado1)) {
		
		echo "<tr>";
			echo "<td>".$row['first_name']."</td>";
			echo "<td>".$row['title']."</td>";
	
		echo "</tr>";

    }
	 
	echo "</TABLE>";
	echo "<input type='button' value='atras' onclick='history.back()'>";
	}
	
	 // emp_no | dept_no | from_date  | to_date
	
?>