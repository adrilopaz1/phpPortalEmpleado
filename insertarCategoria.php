<?php

	 include('session_emple.php');

	$idempl=$_REQUEST['idempl'];
	$categoria=$_REQUEST['category'];
	
	$hoy=date('Y-m-d');
	

	
	if(buscarEmple($idempl, $db)==false){
	
		echo "el empleado no esta dado de alta";
	
	}
	else{
	
		update($idempl, $db, $hoy);
		echo "<br>";
		insert($idempl, $categoria, $db, $hoy);
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
			$sqlupdate="update titles set to_date='$hoy' where emp_no=$id ";

			if (mysqli_query($conn, $sqlupdate)) {

				echo "Cambio de fecha de categoria CORRECTAMENTE";

			}else{
			echo "error ".mysqli_error($conn);
			}
	}
	
	
	function insert($id, $categor, $conn, $hoy){
	
		$to_date="9999-01-01";
		
			$sqlupdate="INSERT INTO titles VALUES ($id, '$categor', '$hoy', '$to_date')";
			
		
			// $resultado1 = mysqli_query($conn, $sqlupdate);

			if (mysqli_query($conn, $sqlupdate)) {

				echo "Cambio de categoria del empleado $id CORRECTAMENTE";

			}else{
			echo "error ".mysqli_error($conn);
			}
	
	}
	
?>