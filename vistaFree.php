<?php 
require_once('php/Conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>World of Mystery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/game.css">
  <link rel="stylesheet" type="text/css" href="css/ventana-modal.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
  <header>
    <section class="wrapper">
      <nav>
        <section class="menu-icon" id="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </section>
        <section class="logo3">
          <img src="imagenes/logo4.png" alt="logo"> 
        </section>
        <section class="logo">
          <img src="imagenes/logo2.png" alt="logo" class="logo2"> 
        </section>
        <section class="menu">
          <ul id="menu-ico">
            <li><a id="BtnModal">Registrarse</a></li>
            <li><a href="index.php"><i class="fas fa-sign-out-alt"></i>Volver</a></li>
          </ul>
        </section>
      </nav>    
    </section>
  </header>
  <section id="myModal" class="modal">
    <section class="Contenido-Modal animate">
      <section class="contenedor-avatar">
        <span class="close">&times;</span>
        <section class="Ingreso" id="Ingreso">
          <section id="avatar">
            
          </section>
          <h1 class="titulo"><i class="fas fa-user-plus"></i>Crear Cuenta</h1>
          <form class="reg" enctype="multipart/form-data">
            <select name="pais" id="pais">
              <?php  
            $conn=new Conexion();
            $llamarMetodo=$conn->Conectar(); 
            $sql="SELECT * FROM `paises` WHERE 1 ";
            $stmt=$llamarMetodo->prepare($sql);
            $stmt->execute();
            while ($fila = $stmt->fetch()) { ?>
              <option value="<?php echo $fila['Codigo']?>"><?php echo $fila['Pais']?></option>
              <?php }?>
            </select>
            <input type="text" placeholder="Ingrese Su Nombre" name="nombre" minlength="6" required="">
            <input type="text" placeholder="Ingrese Su Apellido" name="apellido" minlength="6" required="">
            <input type="email" placeholder="Ingrese Su Correo" name="correo"  minlength="8" required="">
            <input type="text" placeholder="Ingrese Su Nickname" name="nickname" required="">
            <input type="file" name="avatar" required=""> 
            <input type="password" placeholder="Ingrese Su Contraseña" minlength="6" maxlength="10" name="pass" required="">
            <input type="password" placeholder="Confirme Su Contraseña" minlength="6" maxlength="10" name="pass1" required="">   
            <button type="submit">Crear Cuenta</button>  
            <section class="men3"></section>
          </form>
        </section>
      </section>
    </section>
  </section>
  <section class="juego">
    <embed src="http://localhost:50000/" type="" class="pantallaJuego">
  </section>
<script src="js/jquery.min.js"></script>
<script src="js/formulario.js"></script>
<script src="js/ventana-modal.js"></script>
<script src="js/all-fontawesome.js"></script>
</body>
</html>