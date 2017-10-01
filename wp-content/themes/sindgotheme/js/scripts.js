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
});   