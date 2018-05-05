<?php
require_once('Conexion.php');
session_start();
if(isset($_SESSION['ingreso']) && $_SESSION['ingreso']==true){
	$a =$_SESSION['idUsuario'];
	$conn=new Conexion();
	$llamarMetodo=$conn->Conectar(); 
	$sql="SELECT * FROM usuario WHERE IdNickname= '$a'";
	$stmt=$llamarMetodo->prepare($sql);
	$stmt->execute();
	while ($fila = $stmt->fetch()) {
		//echo '<br>'.$fila['Nickname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>World of Mystery</title>
 <link rel="stylesheet" type="text/css" href="../css/game.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header>
      <nav>
        <section class="menu-icon" id="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </section>
        <section class="logo3">
        	<?php 
          	echo '<img src='.$fila['Avatar'].' alt="logo" class="logo1" >';
        	 ?>
        </section>
        <section class="logo">
        	<?php 
          	echo '<img src='.$fila['Avatar'].' alt="logo" class="logo1" >';
        	 ?>
        </section>
        <section class="menu">
          <ul id="menu-ico">
          	<h3>Bienvenido [ <?php echo $fila['Nickname']?> ]</h3>
            <li><a href="cerrar_sesion.php"><i class="fas fa-sign-out-alt"></i>Salir</a></li>
          </ul>
        </section>
      </nav>    
</header>

<script src="../js/nav.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>
<?php 
	}//fin while
}else{
	header("Location:../vistas/erroringreso.html");
}
 ?>