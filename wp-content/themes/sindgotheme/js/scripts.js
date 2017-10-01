/*!
 * Arquivo de JavaScript para funções.
 * Desenvolvido em 2017 pela Bulk Design.
 * Todos os direitos reservados.
 */
 
$(document).ready(function(){
  $('.parallax').parallax();
  $('.scrollspy').scrollSpy();
  $('.slider').slider({
    indicators: false,
    transition: 500,
    interval: 4500
  });
  $('.toggle-overlay').click(function() {
    $('aside').toggleClass('open');
  });
  $('.brand-logo').css('display', 'none');
  window.addEventListener("scroll", function() {
    if (window.scrollY > 50) {
      $('.cordefundodomenu').css({"background-color": "#FFF", "transition-property": "all", "transition-duration": "0.5s"});
      $('.opcaomenu').css('color', '#000');
      $('.brand-logo').css('display', 'block!important');  
      $('.toggle-overlay').css('color', '#000');  
    }
    else {
      $('.cordefundodomenu').css('background-color', 'transparent');
      $('.opcaomenu').css('color', '#FFF');
      $('.brand-logo').css('display', 'none');
      $('.toggle-overlay').css('color', '#FFF');
    }
  },false);
});