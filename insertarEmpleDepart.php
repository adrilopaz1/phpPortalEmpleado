<?php

	 include('session_emple.php');

	 
	$depart=$_REQUEST['depart'];
	$idempl=$_REQUEST['idempl'];
	$hoy=date('Y-m-d');
	

	
	if(buscarEmple($idempl, $db)==false){
	
		echo "el empleado no esta dado de alta";
	
	}
	else{
	
		update($idempl, $db, $hoy);
		echo "<br>";
		insert($idempl, $depart, $db, $hoy);
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
	
	
	function esManager($idempl, $conn){
	
	$esmanager=false;
	
	$sql = "select * from dept_manager where emp_no=$idempl";
	 
      $result = mysqli_query($conn,$sql);
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
	  $count = mysqli_num_rows($result);
			
			if($count== 1){
			
				$esmanager=true;
			
			}
	
		return $esmanager;
	
	}
	
	
	
	function update($id, $conn, $hoy){
	
		$managerok=esManager($id, $conn);

		if($managerok==false){
		
			// $sqlupdate="update dept_emp set to_date='9999-01-01' where emp_no=$id";
			
			$sqlupdate="update dept_emp set to_date='$hoy' where emp_no=$id";

			// $resultado1 = mysqli_query($conn, $sqlupdate);

			if (mysqli_query($conn, $sqlupdate)) {

				echo "Baja del empleado sin cargo CORRECTAMENTE";

			}else{
			echo "error ".mysqli_error($conn);
			}
		
		}else{
		
			// $sqlupdate="update dept_manager set to_date='9999-01-01' where emp_no=$id ";
			$sqlupdate="update dept_manager set to_date='$hoy' where emp_no=$id ";

			if (mysqli_query($conn, $sqlupdate)) {

				echo "Baja del manager CORRECTAMENTE";

			}else{
			echo "error ".mysqli_error($conn);
			}
		}
	}
	
	
	function insert($id, $depart, $conn, $hoy){
	
		$to_date="9999-01-01";
	
		$managerok=esManager($id, $conn);
	
	
	if($managerok==false){
		
			//Resultado del departamento elegido sacamos el id del nuevo departamento
			
			
			$sql1="SELECT dept_no FROM departments where dept_name='$depart'";
			
			$resultado1=mysqli_query($conn, $sql1);
			
			if (mysqli_num_rows($resultado1) > 0) {
			
				while ($fila = mysqli_fetch_assoc($resultado1)) {

					$idDepart=$fila['dept_no'];

				}
			
			}
			
			$sqlupdate="INSERT INTO dept_emp VALUES ($id, '$idDepart', '$hoy', '$to_date')";
			
		
			// $resultado1 = mysqli_query($conn, $sqlupdate);

			if (mysqli_query($conn, $sqlupdate)) {

				echo "Cambio del empleado $id al departamento $idDepart CORRECTAMENTE";
				echo "<br>";
				echo "<input type='button' value='atras' onclick='history.back()'>";

			}else{
			echo "error ".mysqli_error($conn);
			}
		
		}
	else{
		
			//Resultado del departamento elegido sacamos el id del nuevo departamento
			
			
			$sql1="SELECT dept_no FROM departments where dept_name='$depart'";
			
			$resultado1=mysqli_query($conn, $sql1);
			
			if (mysqli_num_rows($resultado1) > 0) {
			
				while ($fila = mysqli_fetch_assoc($resultado1)) {

					$idDepart=$fila['dept_no'];

				}
			}
			
			
			$sqlupdate="INSERT INTO dept_manager VALUES ($id, '$idDepart', '$hoy', '$to_date')";
			
		
			// $resultado1 = mysqli_query($conn, $sqlupdate);

			if (mysqli_query($conn, $sqlupdate)) {

				echo "Cambio del empleado $id al departamento $deptEmple CORRECTAMENTE";
				echo "<br>";
				echo "<input type='button' value='atras' onclick='history.back()'>";

			}else{
			echo "error ".mysqli_error($conn);
			}
		
		}
	
	}
	
	
	
	
	
	
	
	
?>