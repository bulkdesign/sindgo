<?php
/**
 * Template da página inicial.
 */
get_header('home'); ?>
	<section id="bemvindo" class="section scrollspy">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<img src="<?php bloginfo('template_url');?>/img/logo/logo.png">
					<h1>Uma empresa que nasceu preparada para cuidar de condominios</h1>
					<a href="#quemsomos"><i class="material-icons seta">keyboard_arrow_down</i></a>
				</div>
			</div>
		</div>
	</section>
	<!-- DECLARAÇÃO DE LOOP PARA EXIBIR CONTEÚDO -->
	<?php $loophome = new WP_Query( array( 'post_type' => array('home') )); ?>
	<?php while ( $loophome->have_posts() ) : $loophome->the_post(); ?>
		<section id="quemsomos" class="section scrollspy">
			<div class="container">
				<div class="sobre white-text">
					<h1 class="center-align">Quem Somos</h1>
					<hr>
					<!-- EXIBINDO O QUE HÁ NO CAMPO PERSONALIZADO -->
			    	<?php if( get_field('quem_somos') ): ?>
			    		<?php the_field('quem_somos');?>
			    	<?php endif; ?>
			    </div>
			</div>
		</section>
		<section class="parallax-container">
			<div class="parallax"><img src="<?php bloginfo('template_url');?>/img/background/parallax2.jpg"></div>
			<div class="parallaxconteudo">
				<img src="<?php bloginfo('template_url');?>/img/logo/logo.png">
			</div>
		</section>
		<section id="servicos" class="section scrollspy">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h1>Serviços</h1>
						<hr>
					</div>
					<div class="col s12 m6 l3 servico">
						<img src="<?php bloginfo('template_url');?>/img/servicos/sindico.png" class="responsive-img circle">
						<h3>Síndicos Profissionais</h3>
					</div>
					<div class="col s12 m6 l3 servico">
						<img src="<?php bloginfo('template_url');?>/img/servicos/manutencao.png" class="responsive-img circle">
						<h3>Implantação de plano de manutenção predial</h3>
					</div>
					<div class="col s12 m6 l3 servico">
						<img src="<?php bloginfo('template_url');?>/img/servicos/gestao.png" class="responsive-img circle">
						<h3>Gestão de reformas de condomínio</h3>
					</div>
					<div class="col s12 m6 l3 servico">
						<img src="<?php bloginfo('template_url');?>/img/servicos/engenharia.png" class="responsive-img circle">
						<h3>Apoio técnico para contratação de serviços de engenharia</h3>
					</div>
				</div>
			</div>
		</section>
		<section id="diferenciais" class="section scrollspy">
			<div class="container">
				<div class="row">
					<h1>Diferenciais</h1>
					<hr>
					<?php do_action('slideshow_deploy', '7'); ?>
				</div>
			</div>
		</section>
	<!-- ENCERRAMENTO DO LOOP -->
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
<?php get_footer(); ?>