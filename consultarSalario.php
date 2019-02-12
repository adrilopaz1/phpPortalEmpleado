<?php

	include('session_emple.php');
	
	$idemp = $_SESSION['id'];

	
		$sql="select employees.first_name, salary 
		from employees, salaries
		where  employees.emp_no=salaries.emp_no and employees.emp_no=$idemp";

		$resultado1 = mysqli_query($db, $sql);

	if(mysqli_num_rows($resultado1) > 0) {
    // output data of each row
		echo "<TABLE border=1>";
		echo "<tr>";
			echo "<td>Nombre</td>";
			echo "<td>Salario</td>";
		echo "</tr>";
	
    while($row = mysqli_fetch_assoc($resultado1)) {
		
		echo "<tr>";
			echo "<td>".$row['first_name']."</td>";
			echo "<td>".$row['salary']."</td>";
	
		echo "</tr>";

    }
	 
	echo "</TABLE>";
	}
	
	 // emp_no | dept_no | from_date  | to_date
	
?>