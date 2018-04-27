$(document).ready(function () {
  $('.Log').submit(function(e){
    e.preventDefault();
    var data = $(this).serializeArray();
    data.push({name:'log',value:'login'});
    $.ajax({
      url:'php/ingresoUsuario.php',
      type:'post',
      dataType:'json',
      data:data,
      beforeSend:function(){
        $('.cargas').css('display','inline');
      }
    })
    .done(function(){
      $('.men').html('<section class="alert2">Bienvenido</section>');
      location.href="php/game.php";

    })
    .fail(function(){
      $('.men').html('<section class="alert"> Credenciales incorrectas </section>');
    })
    .always(function(){
      $('.cargas').hide();
    })
  })
})
$(document).ready(function () {
    $('.reg').submit(function(e){
    e.preventDefault();
    var data = $(this).serializeArray();
    data.push({name:'reg',value:'registro'});
    $.ajax({
      url:'php/registro_usuario.php',
      type:'post',
      dataType:'json',
      data:data,
      beforeSend:function(){
        $('.cargas').css('display','inline');
      }
    })
    .done(function(){
      $('.men').html('<section class="alert2">Registro exitoso</section>');
    })
    .fail(function(){
      $('.men').html('<section class="alert"> Error al ingresar datos </section>');
    })
    .always(function(){
      $('.cargas').hide();
    })
  })
})