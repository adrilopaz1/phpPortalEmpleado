<?php

	 include('session_emple.php');

	$idempl=$_REQUEST['idempl'];
	$salario=$_REQUEST['salario'];
	
	$hoy=date('Y-m-d');
	

	
	if(buscarEmple($idempl, $db)==false){
	
		echo "el empleado no esta dado de alta";
	
	}
	else{
	
		update($idempl, $db, $hoy);
		echo "<br>";
		insert($idempl, $salario, $db, $hoy);
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
	

	function update($id, $conn, $hoy){
		
			// $sqlupdate="update dept_manager set to_date='9999-01-01' where emp_no=$id ";
			$sqlupdate="update salaries set to_date='$hoy' where emp_no=$id ";

			if (mysqli_query($conn, $sqlupdate)) {

				echo "Cambio de fecha salario CORRECTAMENTE";
				echo "<br>";

			}else{
			echo "error ".mysqli_error($conn);
			}
	}
	
	
	function insert($id, $salary, $conn, $hoy){
	
		$to_date="9999-01-01";
		
			$sqlupdate="INSERT INTO salaries VALUES ($id, $salary, '$hoy', '$to_date')";
			
		
			// $resultado1 = mysqli_query($conn, $sqlupdate);

			if (mysqli_query($conn, $sqlupdate)) {

				echo "Cambio de salario del empleado $id CORRECTAMENTE";
				echo "<br>";
				echo "<input type='button' value='atras' onclick='history.back()'>";

			}else{
			echo "error ".mysqli_error($conn);
			}
	
	}
	
?>