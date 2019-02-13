<?php
   include('session_emple.php');
   
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo $login_session; ?></h1> 
	  
	  
	  <nav class="">
  <ol>
    <li><a href="cambiarDept.php">Cambiar de departamento </a></li>
    <li><a href="cambiarSalario.php">Cambiar salario </a></li>
    <li><a href="cambiarCategoria.php">Cambiar categoria</a></li>
  </ol>
  <ol id="">
        <li><a href="consultarDeptManager.php">Consultar departamento </a></li>
        <li><a href="consultarSalarioManager.php">Consultar salario</a></li>
		<li><a href="consultarCategoriaManager.php">Consultar categoria</a></li>
  </ol>
</nav>
	  
	  
	  
      <h2><a href = "logout_emple.php">Cerrar Sesion</a></h2>
   </body>
   
</html>