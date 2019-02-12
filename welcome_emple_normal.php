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
  <ol id="">
        <li><a href="consultarDept.php">Consultar departamento </a></li>
        <li><a href="consultarSalario.php">Consultar salario</a></li>
		<li><a href="consultarCategoria.php">Consultar categoria</a></li>
  </ol>
</nav>
	  
	  
	  
      <h2><a href = "logout_emple.php">Cerrar Sesion</a></h2>
   </body>
   
</html>