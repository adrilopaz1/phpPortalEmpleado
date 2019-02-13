<?php

	 include('session_emple.php');

	$idempl=$_REQUEST['idempl'];
	
		
	if(buscarEmple($idempl, $db)==false){
	
		echo "el empleado no esta dado de alta";
		echo "<br>";
		echo "<input type='button' value='atras' onclick='history.back()'>";
	}
	else{
	
		title($idempl, $db);
	}

	function buscarEmple($idempl, $conn){
	
		
	
		$existe=false;
		
		$sql = "select * from employees where emp_no=$idempl";
	 
		$result = mysqli_query($conn,$sql);
		// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
	  if(mysqli_num_rows($result) > 0) {
			
			$existe=true;
			
		}
	
		return $existe;
	
	}
	

	function title($id, $db){
	
		$sql1=" select employees.first_name, title, from_date, to_date from titles, employees where titles.emp_no=employees.emp_no and titles.emp_no=$id and titles.to_date='9999-01-01'";
	
		$resultado1 = mysqli_query( $db,$sql1);
	
		if(mysqli_num_rows($resultado1) > 0) {
    // output data of each row
		echo "<TABLE border=1>";
		echo "<tr>";
			echo "<td>Nombre</td>";
			echo "<td>Categoria</td>";
			echo "<td>Fecha Alta</td>";
			echo "<td>Fecha Baja</td>";
		echo "</tr>";
	
    while($row = mysqli_fetch_assoc($resultado1)) {
		
		echo "<tr>";
			echo "<td>".$row['first_name']."</td>";
			echo "<td>".$row['title']."</td>";
			echo "<td>".$row['from_date']."</td>";
			echo "<td>".$row['to_date']."</td>";
	
		echo "</tr>";

    }
	 
	echo "</TABLE>";
	echo "<input type='button' value='atras' onclick='history.back()'>";
	}
	
	}
	
?>