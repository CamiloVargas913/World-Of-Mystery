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
    $('.cont').submit(function(e){
    e.preventDefault();
    var data = $(this).serializeArray();
    data.push({name:'cont',value:'Contacto'});
    $.ajax({
      url:'php/RegistroContacto.php',
      type:'post',
      dataType:'json',
      data:data,
      beforeSend:function(){
        $('.cargas').css('display','inline');
      }
    })
    .done(function(){
      $('.men2').html('<section class="alert2">Envio exitoso</section>');
    })
    .fail(function(){
      $('.men2').html('<section class="alert"> Error al enviar </section>');
    })
    .always(function(){
      $('.cargas').hide();
    })
  })
})

$(document).ready(function() {
  $('.reg').submit(function(e) {
    e.preventDefault();
    var datos = new FormData($('.reg')[0]);
    $.ajax({
      url:'php/registro_usuario.php',
      type:'POST',
      data:datos,
      contentType: false,
      processData:false,
      beforeSend:function(){
        $('.cargas').css('display','inline');
      }
    })
    .done(function(res){
      $('.men3').html(res);
    })
    .fail(function(){
      $('.men3').html('<section class="alert"> Error al registrar usuario </section>');
    })
    .always(function(){
      $('.cargas').hide();
    })
  }) 
})