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
               <div class="col l2 m6 s12">
                <h5 class="white-text">Página Inicial</h5>
                   <a href="#quemsomos"><p>QUem Somos</p></a>
                   <a href="#servicos"><p>Serviços</p></a>
                   <a href="#contato"><p>Contato</p></a>
                   <a href="blog"><p>Blog</p></a>
               </div>
                <div class="col l2 m6 s12">
                <h5 class="white-text">Redes Sociais</h5>
                   <a href="http://facebook.com" target="_blank"><p>Facebook</p></a>
                   <a href="http://instagram.com" target="_blank"><p>Instagram</p></a>
                   <a href="http://twitter.com" target="_blank"><p>Twitter</p></a>
                   <a href="http://youtube.com" target="_blank"><p>YouTube</p></a>
               </div>         
            </div>
             <div class="col l8 m12 s12 endereco">
                <h5 class="white-text">SindGO - Síndicos Profissionais Ltda.</h5>
                <p class="grey-text">
                  R. Artur Bailo, 60 - Mossunguê<br>
                   Curitiba - PR | CEP 81200-180<br><br>
                </p>
             </div>
          </div>
        </div>
      <div class="footer-copyright">
        <div class="container center">
          SindGO © <?php echo date('Y'); ?> - Todos os direitos reservados | Made by <a class="purple-text text-lighten-3" href="http://www.bulkdesign.com.br" target="blank">Bulk Design</a>
        </div>
      </div>
  </footer>
  <!-- IMPORTAÇÃO DOS ARQUIVOS DE JAVASCRIPT -->
  <script src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/materialize.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/scripts.min.js"></script>
  <?php wp_footer(); ?>
  </body>
</html>