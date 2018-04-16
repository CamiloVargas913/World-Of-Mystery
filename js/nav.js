var element = document.getElementById("menu-ico");
var btn = document.getElementById("menu-icon");

btn.onclick= function(){
      element.classList.toggle("showing");
}
      //Scrolling Effect
      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
                  $('.logo1').css({'display':'none'});
                  $('.logo2').css({'display':'block'});
            }
            else {
                  $('nav').removeClass('black');
                  $('.logo1').css({'display':'block'});
                  $('.logo2').css({'display':'none'});
            }
      });