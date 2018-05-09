/*modificar datos de usuario*/
$(document).ready(function() {
  $('.mod').submit(function(e) {
    e.preventDefault();
    var datos = new FormData($('.mod')[0]);
    $.ajax({
      url:'../php/modificarUsuario.php',
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
/*eliminar usuario*/
$(document).ready(function() {
  $('.eli').submit(function(e) {
    e.preventDefault();
    var datos = new FormData($('.eli')[0]);
    $.ajax({
      url:'../php/eliminarUsuario.php',
      type:'POST',
      data:datos,
      contentType: false,
      processData:false,
      beforeSend:function(){
        $('.cargas').css('display','inline');
      }
    })
    .done(function(res){
      $('.men').html(res);
    })
    .fail(function(){
      $('.men').html('<section class="alert"> Error al registrar usuario </section>');
    })
    .always(function(){
      $('.cargas').hide();
    })
  }) 
})