<?php
/**
 * Template para exibicao do rodapé da página inicial.
 */
?>
<!-- FOOTER -->
  <footer class="page-footer">
    <div class="container">
        <div class="row">
          <section id="contato" class="section scrollspy">
              <div class="container">
                <div class="row">
                    <!--Formulário-->
                    <div class="col s12">
                        <h3>Entre em Contato Conosco</h3>
                    </div>
                    <div class="col l2"></div>
                    <div class="col s12 m12 l8 margin50">
                        <form>
                            <div class="col s12 m6 l6">
                                <input type="text" name="ContatoNome" placeholder="Seu Nome (Requerido)">
                            </div>
                            <div class=" col s12 m6 l6">
                                <input type="text" name="ContatoEmail" placeholder="Seu E-mail (Requerido)">
                            </div>
                            <div class="col s12">
                                <input type="text" name="ContatoTelefone" placeholder="Sua Mensagem">
                            </div>
                            <div class="col s12">
                                <input type="submit" value="Enviar" name="btnEnviar" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
              </div>
          </section>



          <div class="col s12">
            <div class="sitemap">
               <div class="col l2 m4 s12">
                <h5 class="white-text">Sobre</h5>
                   <a href="#"><p>Sobre Nós</p></a>
                   <a href="#"><p>Onde Comprar</p></a>
               </div>
                <div class="col l2 m4 s12">
                <h5 class="white-text">Suporte</h5>
                   <a href="#"><p>Contato</p></a>
                   <a class=" waves-light modal-trigger" href="#modal1"><p>SAC</p></a>
               </div>
                <div class="col l2 m4 s12">
                <h5 class="white-text">Legal</h5>
                   <a href="#"><p>Privacidade</p></a>
                   <a href="#"><p>Termos</p></a>
               </div>            
            </div>
             <div class="col l6 m12 s12 endereco">
                <h5 class="white-text">SindGo - Síndicos Profissionais Ltda.</h5>
                <p class="grey-text">
                  Rua Rio Solimões, 1355 - Weissópolis<br>
                  Barracão 2 - CEP: 83322-150 - Pinhais/PR - Brasil<br>
                  Telefone: (41) 3653-9389 | (41) 8400-1113<br>
                </p>
             </div>
          </div>
        </div>
      <div class="footer-copyright">
        <div class="container center">
          SindGo © <?php echo date('Y'); ?> - Todos os direitos reservados | Made by <a class="purple-text text-lighten-3" href="http://www.bulkdesign.com.br" target="blank">Bulk Design</a>
        </div>
      </div>
  </footer>
  <!-- IMPORTAÇÃO DOS ARQUIVOS DE JAVASCRIPT -->
  <script src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/materialize.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/scripts.js"></script>
  <script type="text/javascript">
     $(document).ready(function(){
      $('.parallax').parallax();
    });
  </script>
  <script type="text/javascript">
    $('.brand-logo').css('display', 'none');
  </script>
  <script type="text/javascript">
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
  </script>
  <?php wp_footer(); ?>
  </body>
</html>