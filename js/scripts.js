    (function($) {
  "use strict"; // Inicio de uso estricta

 // Desplazamiento suave usando jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 72)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Cierra el menú de respuesta cuando se hace clic en un enlace de activación de desplazamiento
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activar scrollspy para agregar una clase activa a los elementos de la barra de navegación en el desplazamiento
  $('body').scrollspy({
    target: '#mainNav',
    offset: 75
  });

  // Contraer la barra de navegación
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-scrolled");
    } else {
      $("#mainNav").removeClass("navbar-scrolled");
    }
  };
  // Contraer ahora si la página no está en la parte superior
  navbarCollapse();
  // Contraer la barra de navegación cuando se desplaza la página
  $(window).scroll(navbarCollapse);



})(jQuery); 
// Fin de uso estricto
