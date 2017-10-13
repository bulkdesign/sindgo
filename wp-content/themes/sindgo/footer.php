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
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
                </div>
              </div>
          </section>
          <section class="social">
            <div class="col s12">
              <a href="https://facebook.com" target="_blank"><img src="<?php bloginfo('template_url');?>/img/social/facebook.png"></a>
              <a href="https://linkedin.com" target="_blank"><img src="<?php bloginfo('template_url');?>/img/social/linkedin.png"></a>
              <p class="white-text">(xx) xxxxx-xxxx</p>
              <p class="white-text"><a href="mailto:goliveira@sindgo.com">goliveira@sindgo.com</a></p>
            </div>
          </section>
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