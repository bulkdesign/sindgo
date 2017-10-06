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
					<h1>Uma empresa que nasceu preparada para cuidar de Condomínios</h1>
					<a href="#quemsomos"><i class="material-icons seta">keyboard_arrow_down</i></a>
				</div>
			</div>
		</div>
	</section>
	<!-- DECLARAÇÃO DE LOOP PARA EXIBIR CONTEÚDO -->
	<?php $loophome = new WP_Query( array( 'post_type' => array('home') )); ?>
	<?php while ( $loophome->have_posts() ) : $loophome->the_post(); ?>
		<section id="servicos" class="section scrollspy">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h1>Serviços</h1>
						<hr>
					</div>
					<div class="col s12">
						<div class="col s12 m4 servico">
							<div class="col s3">
								<img src="<?php bloginfo('template_url');?>/img/diferencial/sindico.png">
							</div>
							<div class="col s9">
								<h3>Síndico Profissional</h3>
							</div>
							<div class="col s12">
								<p>Um condomínio precisa uma gestão empresarial, para isto contamos com profissionais capacitados que trabalham de forma isenta e transparente aos condomínios</p>
							</div>
						</div>
						<div class="col s12 m4 servico">
							<div class="col s3">
								<img src="<?php bloginfo('template_url');?>/img/diferencial/manutencao.png">
							</div>
							<div class="col s9">
								<h3>Plano de Manutenção Predial</h3>
							</div>
							<div class="col s12">
								<p>Aplicamos as orientações da NBR 5674 com o objetivo de garantir a vida útil do condomínio, atuando principalmente de forma preventiva, diminuindo os custos com Manutenções Corretivas</p>
							</div>
						</div>
						<div class="col s12 m4 servico">
							<div class="col s3">
								<img src="<?php bloginfo('template_url');?>/img/diferencial/reforma.png">
							</div>
							<div class="col s9">
								<h3>Gestão de Reformas em Codomínio</h3>
							</div>
							<div class="col s12">
								<p>Qualquer intervenção em unidades autônomas ou áreas comuns devem ser tratadas de forma organizada e com segurança. Trazemos os procedimentos e recomendações da NBR 16.280 aplicadas para o dia-a-dia do condomínio</p>
							</div>
						</div>
						<div class="col s12 m4 servico">
							<div class="col s3">
								<img src="<?php bloginfo('template_url');?>/img/diferencial/financeiro.png">
							</div>
							<div class="col s9">
								<h3>Gestão Financeira</h3>
							</div>
							<div class="col s12">
								<p>Saber controlar os custos e discriminar corretamente os gastos traz transparência e assertividade aos nossos orçamentos</p>
							</div>
						</div>
						<div class="col s12 m4 servico">
							<div class="col s3">
								<img src="<?php bloginfo('template_url');?>/img/diferencial/contratacao.png">
							</div>
							<div class="col s9">
								<h3>Apoio Técnico para contratação</h3>
							</div>
							<div class="col s12">
								<p>Saber controlar os custos e discriminar corretamente os gastos traz transparência e assertividade aos nossos orçamentos</p>
							</div>
						</div>
						<div class="col s12 m4 servico">
							<div class="col s3">
								<img src="<?php bloginfo('template_url');?>/img/diferencial/inspecao.png">
							</div>
							<div class="col s9">
								<h3>Inspeção Predial</h3>
							</div>
							<div class="col s12">
								<p>Uma inspeção predial é como check up das edificações, gerando um laudo das anomalias e manifestações patologias, necessário para atuar na manutenção corretiva</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="quemsomos" class="section scrollspy">
			<div class="container">
				<div class="row">
					<div class="sobre col s12">
						<h1 class="center-align">Quem Somos</h1>
						<hr>
					</div>
					<div class="col s12">
						<div class="col s12 m6 textosobre">
							<!-- EXIBINDO O QUE HÁ NO CAMPO PERSONALIZADO QUEM SOMOS - POST 'HOME'-->
					    	<?php if( get_field('quem_somos') ): ?>
					    		<?php the_field('quem_somos');?>
					    	<?php endif; ?>					
					    </div>
					    <div class="col s12 m6 curriculosobre">
					    	<!-- EXIBINDO O QUE HÁ NO CAMPO PERSONALIZADO IMAGEM CURRÍCULO E TEXTO CURRÍCULO - POST 'HOME'-->
					    	<img src="<?php bloginfo('template_url');?>/img/curriculo/exemplo.jpg" class="responsive-img circle">
					    	<?php if( get_field('texto_curriculo') ): ?>
					    		<?php the_field('texto_curriculo');?>
					    	<?php endif; ?>	
					    </div>
					</div>
				</div>
			    </div>
			</div>
		</section>
		<section class="parallax-container">
			<div class="parallax"><img src="<?php bloginfo('template_url');?>/img/background/parallax2.jpg"></div>
			<div class="parallaxconteudo">
				<img src="<?php bloginfo('template_url');?>/img/logo/logo.png">
			</div>
		</section>
		<section id="diferenciais" class="section scrollspy">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h1>Diferenciais</h1>
						<hr>
						<?php if( get_field('texto_diferenciais') ): ?>
					    	<h3><?php the_field('texto_diferenciais');?></h3>
					    <?php endif; ?>	
					</div>
					<div class="col s12">
						<div class="col s12 m4">
							<img src="<?php the_field('imagem_diferencial_1'); ?>">
							<?php if( get_field('diferencial_1') ): ?>
						    	<p><?php the_field('diferencial_1');?></p>
						    <?php endif; ?>	
						</div>
						<div class="col s12 m4">
							<img src="<?php the_field('imagem_diferencial_2'); ?>">
							<?php if( get_field('diferencial_2') ): ?>
						    	<p><?php the_field('diferencial_2');?></p>
						    <?php endif; ?>	
						</div>
						<div class="col s12 m4">
							<img src="<?php the_field('imagem_diferencial_3'); ?>">
							<?php if( get_field('diferencial_3') ): ?>
						    	<p><?php the_field('diferencial_3');?></p>
						    <?php endif; ?>	
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- ENCERRAMENTO DO LOOP -->
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
<?php get_footer(); ?>