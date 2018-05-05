<?php   session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>World of Mystery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/slider.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/ventana-modal.css">
  <link rel="stylesheet" type="text/css" href="css/noticias.css">
  <link rel="stylesheet" type="text/css" href="css/Ranking.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/main.js"></script>
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
          <img src="imagenes/logo4.png" alt="logo" class="logo1">
          <img src="imagenes/logo2.png" alt="logo" class="logo2"> 
        </section>
        <section class="menu">
          <ul id="menu-ico">
            <li><a href="#inicio"><i class="fas fa-home"></i> Inicio</a></li>
            <li><a href="#noticias">Noticias</a></li>
            <li><a href="#ranking">Ranking</a></li>
            <li><a id="BtnModal">Ingresar / Registrar</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li><a href="#data">Acerca de</a></li>
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
          <img src="imagenes/1.png" alt="Avatar" class="avatar" >
          <h1 class="titulo">Iniciar Sesión</h1>
          <form class="Log"> <!-- action="php/ingresoUsuario.php" method="POST"-->
            <input type="text" placeholder="Ingrese Su Nickname" name="nickname" required="">
            <input type="password" placeholder="Ingrese Su Contraseña " name="pass" required="">   
            <button type="submit">Login</button>
            <section class="cargas"><i class="fa fa-spinner fa-spin"></i>  Ingresando... </section>
            <section class="men"></section>
            <section class="contras"> 
              <a href="#" id="btRegistro" class="contras"><i class="fas fa-user-plus"></i> Crear una cuenta.</a>
              <a href="#">¿Se te olvidó tu contraseña?</a>
            </section>
          </form>
        </section>
      </section>
        <!--Registro Usuario-->
      <section class="contenedor-avatar Registro" id="Registro">
          <h3 class="titulo"><i class="fas fa-user-plus"></i> Registrarse</h3>
          <form class="reg" enctype="multipart/form-data">
            <select name="pais" id="pais">
              <option value="">Seleccione Pais</option>
              <option value="CO">Colombia</option>
              <option value="BR">Brasil</option>
              <option value="AR">Argentina</option>
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
            <section class="contras"> 
              <a  href="#" id="volver" class="contras"><i class="fas fa-arrow-left"></i> Iniciar Sesion</a>
            </section>
          </form>
      </section>
    </section>
  </section>


  <section class="slideshow">
    <ul class="slider">
      <li>
        <img src="imagenes/img12.png" alt=""><!--1349*690-->
        <section class="caption">
          <!--<h1>Lorem ipsum</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, totam, dignissimos. Provident distinctio, doloribus debitis.</p>-->
          <section class="juego">
            <?php include('php/validarjuego.php');?>
          </section>
        </section>
      </li>
       <li>
        <img src="imagenes/img5.png" alt="">
        <section class="caption">
          <h1>Los Universos</h1>
          <p>Explora distintos universos y combate enemigos ganando grandiosas recompensas.</p>
          <section class="juego">
            <?php include('php/validarjuego.php');?>
          </section>
        </section>
      </li>
       <li>
        <img src="imagenes/img11.png" alt="">
        <section class="caption">
          <h1>Lorem ipsum</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, totam, dignissimos. Provident distinctio, doloribus debitis.</p>
          <section class="juego">
            <?php include('php/validarjuego.php');?>
          </section>
        </section>
      </li>
    </ul>
    <ol class="pagination">
    </ol>
    <section class="left">
      <span><i class="fa fa-chevron-left"></i></span>
    </section>
    <section class="right">
      <span><i class="fa fa-chevron-right"></i></span>
    </section>
  </section>

  <section class="content">
    <section id="inicio"></section>
      <section class="descripcion card" >
        <h3><i class="icon-logo"></i> World of Mystery </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur nisi libero ipsa quibusdam quos nulla veniam atque ipsam, excepturi mollitia. Eum saepe voluptates incidunt omnis at in odio eos perspiciatis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias aut, consequatur atque repudiandae ex soluta, voluptates sit, explicabo maiores voluptas expedita alias animi magnam dicta rem blanditiis placeat itaque ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reiciendis cum minus officiis, iusto odit dignissimos perferendis, veniam deserunt nemo odio porro inventore blanditiis! Deserunt facilis voluptate molestiae, tempore alias.</p>
      </section>
      <section class="video">
        <video controls class="card">
          <source src="video/space.mp4" type="video/mp4">
        </video>
        <section class="parrafo card">
          <h3><i class="fab fa-modx"></i> Modalidal</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt culpa libero aliquid nesciunt, ullam odit fuga, saepe iure, eaque itaque, et laudantium omnis quidem deleniti consequatur aperiam neque dignissimos? Fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam iusto, beatae reiciendis vitae dolorem voluptatibus. Officiis at sit reiciendis voluptatem explicabo eaque, alias pariatur magnam molestiae vitae suscipit ut delectus.</p>
        </section> 
      </section>  
      <section id="noticias"></section>
      <section class="noticias card">
        <article class="noticia">
        <h3><i class="fas fa-exclamation-circle"></i> Noticias</h3>
          <section class="caja">
            <img src="imagenes/img3.jpg" alt="" class="imgnoticia card">
            <section class="textonoticia">
              <a href="">Texto de la noticia N°1</a>
            </section>
          </section>
        </article>
        <article class="noticia">
          <section class="caja">
            <img src="imagenes/img9.jpg" alt="" class="imgnoticia card">
            <section class="textonoticia">
              <a href="">Texto de la noticia N°2</a>
            </section>
          </section>
        </article>
        <article class="noticia">
          <section class="caja">
            <img src="imagenes/img7.jpg" alt="" class="imgnoticia card">
            <section class="textonoticia">
              <a href="">Texto de la noticia N°3</a>
            </section>
          </section>
        </article>
        <article class="noticia card">
          <section class="caja">
            <img src="imagenes/img6.jpg" alt="" class="imgnoticia card">
            <section class="textonoticia">
              <a href="">Texto de la noticia N°4</a>
            </section>
          </section>
        </article>
      </section>
      <section id="ranking"></section>
      <section class="Ranking">
        <section class="contenedor card">
          <h3><i class="fas fa-trophy"></i> Ranking  <i class="fas fa-trophy"></i></h3>
          <table>
            <thead>
              <tr>
                  <th>Puntaje</th>
                  <th>Nivel</th>
                  <th>Nombre</th>
                  <th>Nickname</th>
                  <th>Pais</th>
                </tr>
            </thead>
              <tbody>
              <tr>
                <td>100</td>
                <td>1</td>
                <td>Camilo</td>
                <td>XxchrisvilxX</td>
                <td>Colombia</td>
              </tr>
              <tr>
                <td>100</td>
                <td>1</td>
                <td>Camilo</td>
                <td>XxchrisvilxX</td>
                <td>Colombia</td>
              </tr>
              <tr>
                <td>100</td>
                <td>1</td>
                <td>Camilo</td>
                <td>XxchrisvilxX</td>
                <td>Colombia</td>
              </tr>
            </tbody>
          </table>
        </section>
      </section>
      <section id="contacto"></section>
      <section class="contacto">
        <section class="Contenido card">
              <h3><i class="fas fa-user"></i> Contacto</h3>
          <form class="cont">
            <input type="text" name="asunto" placeholder="Asunto" required="">
            <input type="email" name="correo" placeholder="Correo" required="">
            <textarea name="mensaje"  placeholder="Mensage" required="" cols="10" rows="10"></textarea>
            <button type="submit" class="btn">Enviar</button>
            <section class="cargas"><i class="fa fa-spinner fa-spin"></i>  Enviando... </section>
            <section class="men2"></section>
          </form>
        </section>
      </section>
      <section class="acerca" id="data">
        <section class="parrafo2 card">
          <h3><i class="fas fa-star"></i> Acerca De <i class="fas fa-star"></i></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt culpa libero aliquid nesciunt, ullam odit fuga, saepe iure, eaque itaque, et laudantium omnis quidem deleniti consequatur aperiam neque dignissimos? Fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam iusto, beatae reiciendis vitae dolorem voluptatibus. Officiis at sit reiciendis voluptatem explicabo eaque, alias pariatur magnam molestiae vitae.</p>
        </section>
        <section class="img">
          <img src="imagenes/logo3.png" alt="" class="card">
        </section>
      </section>
  </section>
    <section class="footer">
      <footer>
        <section class="social">  
           <a href="https://facebook.com" target="_blank" class="fab fa-facebook-square"></a>
              <a href="https://twitter.com" target="_blank" class="fab fa-twitter-square"></a>
              <a href="https://plus.google.com/explore" target="_blank" class="fab fa-google-plus-square"></a>
        </section>
       <p class="copy">&copy; World of Mystery 2018 - Todos los derechos reservados</p>
      </footer>
    </section>
</section>
<script src="js/formulario.js"></script>
<script src="js/ventana-modal.js"></script>
<script src="js/nav.js"></script>
<script defer src="js/all-fontawesome.js"></script>
</body>
</html>