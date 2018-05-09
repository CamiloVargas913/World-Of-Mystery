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
  <link rel="stylesheet" type="text/css" href="../css/ventana-modal.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">

</head>
<body>
<header>
      <nav>
        <section class="menu-icon" id="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </section>
        <section class="user">
        	<?php 
          	echo '<img src='.$fila['Avatar'].' alt="logo" class="user1" >';
        	 ?>
        </section>
        <section class="logo">
        	<?php 
          	echo '<img src='.$fila['Avatar'].' alt="logo" class="user1" >';
        	 ?>
        </section>
        <section class="menu">
          <ul id="menu-ico">
          	<h3>Bienvenido [ <?php echo $fila['Nickname']?> ]</h3>
            <li><a id="BtnModal"> Modificar | Eliminar </a></li>
            <li><a href="cerrar_sesion.php"><i class="fas fa-sign-out-alt"></i>Salir</a></li>
          </ul>
        </section>
      </nav>    
</header>
   <section id="myModal" class="modal">
    <section class="Contenido-Modal animate">
      <section class="contenedor-avatar">
        <span class="close">&times;</span>
        <section class="Ingreso" id="Ingreso">
          <section id="avatar">
          </section>
          <h1 class="titulo">Modificar Cuenta</h1>
          <h4 class="parr"> Los campos en rojo no se pueden modificar</h4>
          <form class="mod" enctype="multipart/form-data"> 
            <input type="text" value="<?php echo $fila['Nombre']?>" name="nombre" minlength="6" required="" >
            <input type="text" value="<?php echo $fila['Apellido']?>" name="apellido" minlength="6" required="" >
            <input type="email" class="fijo" value="<?php echo $fila['Correo']?>" name="correo"  minlength="8" required="" readonly>
            <input type="text" class="fijo" value="<?php echo $fila['Nickname']?>" name="nickname" readonly >
            <input type="file" name="avatar" required=""> 
            <input type="password" placeholder="Ingrese Su Contraseña" minlength="6" maxlength="10" name="pass" required="">
            <input type="password" placeholder="Confirme Su Contraseña" minlength="6" maxlength="10" name="pass1" required="">   
            <button type="submit">Modificar Cuenta</button>  
            <section class="men3"></section>
            <section class="contras"> 
              <a href="#" id="btRegistro" class="contras"><i class="fas fa-user-plus"></i> Eliminar Cuenta.</a>
            </section>
          </form>
        </section>
      </section>
        <!--Registro Usuario-->
      <section class="contenedor-avatar Registro" id="Registro">
          <h1 class="titulo"><i class="fas fa-user-plus"></i> Eliminar Cuenta</h1>
          <h4 class="parr"> Ingrese todos  los datos requeridos para eliminar la cuenta</h4>
           <form class="eli"> <!-- action="php/ingresoUsuario.php" method="POST"-->
            <input type="text" class="fijo" placeholder="Ingrese Su Nickname" id="nickname" name="nickname" required="">
            <input type="email" class="fijo" placeholder="Ingrese Su Correo"  name="correo" required="">
            <input type="password" class="fijo" placeholder="Ingrese Su Contraseña" minlength="6" maxlength="10" name="pass" required="">
            <input type="password" class="fijo" placeholder="Confirme Su Contraseña" minlength="6" maxlength="10" name="pass1" required="">   
            <button type="submit">Eliminar</button>
            <section class="cargas"><i class="fa fa-spinner fa-spin"></i>  Eliminando... </section>
            <section class="men"></section>
             <section class="contras"> 
              <a  href="#" id="volver" class="contras"><i class="fas fa-arrow-left"></i> Modificar Cuenta</a>
            </section>
          </form>
      </section>
    </section>
  </section>
  <section class="juego">
    <embed src="http://localhost:50000/" type="" class="pantallaJuego">
  </section>

<script src="../js/jquery.min.js"></script>
<script src="../js/ventana-modal.js"></script>
<script src="../js/formularioModificar.js"></script>
<script src="../js/all-fontawesome.js"></script>
</body>
</html>
<?php 
	}//fin while
}else{
	header("Location:../vistas/erroringreso.html");
}
 ?>