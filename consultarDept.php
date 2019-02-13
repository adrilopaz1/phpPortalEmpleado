<?php

	include('session_emple.php');
	
	$idemp = $_SESSION['id'];

	
		$sql="select dept_emp.dept_no, employees.first_name
		from employees, dept_emp 
		where  dept_emp.emp_no=employees.emp_no and employees.emp_no=$idemp";

		$resultado1 = mysqli_query($db, $sql);

	if(mysqli_num_rows($resultado1) > 0) {
    // output data of each row
		echo "<TABLE border=1>";
		echo "<tr>";
			echo "<td>IdDepartamento</td>";
			echo "<td>IdEmpleado</td>";
		echo "</tr>";
	
    while($row = mysqli_fetch_assoc($resultado1)) {
		
		echo "<tr>";
			echo "<td>".$row['dept_no']."</td>";
			echo "<td>".$row['first_name']."</td>";
	
		echo "</tr>";

    }
	 
	echo "</TABLE>";
	echo "<br>";
	echo "<input type='button' value='atras' onclick='history.back()'>";
	}
	
	 // emp_no | dept_no | from_date  | to_date
	
?>