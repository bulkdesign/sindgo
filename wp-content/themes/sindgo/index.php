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
					<a href="#servicos"><i class="material-icons seta">keyboard_arrow_down</i></a>
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
							<div class="col s12 servicocabecalho">
								<div class="col s3">
									<img src="<?php bloginfo('template_url');?>/img/servicos/sindico.png">
								</div>
								<div class="col s9">
									<h3>Síndico Profissional</h3>
								</div>
							</div>
							<div class="col s12">
								<p>Os condomínios cada vez mais complexos precisam uma gestão empresarial. Como Síndicos Profissionais temos que cumprir o regimento interno e a obrigação de atender as legislações vigentes.</p>
							</div>
						</div>
						<div class="col s12 m4 servico">
							<div class="col s12 servicocabecalho">
								<div class="col s3">
									<img src="<?php bloginfo('template_url');?>/img/servicos/manutencao.png">
								</div>
								<div class="col s9">
									<h3>Plano de Manutenção Predial</h3>
								</div>
							</div>
							<div class="col s12">
								<p>Aplicamos as orientações da <a href="http://www.sindgo.com/artigo/norma-nbr-5674/" style="color: darkorange;"><u>NBR 5674</u></a> com o objetivo de garantir a vida útil do condomínio, atuando principalmente de forma preventiva, diminuindo os custos com Manutenções Corretivas.</p>
							</div>
						</div>
						<div class="col s12 m4 servico">
							<div class="col s12 servicocabecalho">
								<div class="col s3">
									<img src="<?php bloginfo('template_url');?>/img/servicos/reforma.png">
								</div>
								<div class="col s9">
									<h3>Gestão de Reformas em Condomínio</h3>
								</div>
							</div>
							<div class="col s12">
								<p>Qualquer intervenção em unidades autônomas ou áreas comuns devem ser tratadas de forma organizada e com segurança. Trazemos os procedimentos e recomendações da <a href="http://www.sindgo.com/artigo/nbr-16-280/" style="color: darkorange;"><u>NBR 16.280</u></a> aplicadas para o dia-a-dia do condomínio.</p>
							</div>
						</div>
						<div class="col s12 m4 servico">
							<div class="col s12 servicocabecalho">
								<div class="col s3">
									<img src="<?php bloginfo('template_url');?>/img/servicos/financeiro.png">
								</div>
								<div class="col s9">
									<h3>Gestão Financeira</h3>
								</div>							
							</div>
							<div class="col s12">
								<p>Saber controlar os custos e discriminar corretamente os gastos traz transparência e assertividade aos nossos orçamentos. O Planejamento financeiro de curto e médio prazo é nossa ferramenta para alcançar as metas almejadas do condomínio.</p>
							</div>
						</div>
						<div class="col s12 m4 servico">
							<div class="col s12 servicocabecalho">
								<div class="col s3">
									<img src="<?php bloginfo('template_url');?>/img/servicos/contratacao.png">
								</div>
								<div class="col s9">
									<h3>Apoio Técnico para contratação</h3>
								</div>
							</div>
							<div class="col s12">
								<p>Definir escopo e saber como receber os serviços prestados é imprescindível para uma boa contratação. Fazemos concorrências com fornecedores e parceiros buscando o melhor custo benefício para o condomínio.</p>
							</div>
						</div>
						<div class="col s12 m4 servico">
								<div class="col s12 servicocabecalho">
								<div class="col s3">
									<img src="<?php bloginfo('template_url');?>/img/servicos/inspecao.png">
								</div>
								<div class="col s9">
									<h3>Inspeção Predial</h3>
								</div>
							</div>
							<div class="col s12">
								<p>Uma inspeção predial é como <i>check up</i> das edificações, gerando um laudo das anomalias e manifestações patologias, necessário para atuar na manutenção corretiva.</p>
							</div>
						</div>
						<div class="col s12" style="padding-top: 50px;">
							<h3>Marque uma reunião com a gente e faremos uma proposta para seu condomínio.
								<br><br>Ligue: (xx) xxxxx-xxxx)
							</h3>
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
						<div class="col s12 m12 l4 textosobre">
							<!-- EXIBINDO O QUE HÁ NO CAMPO PERSONALIZADO QUEM SOMOS - POST 'HOME'-->
					    	<?php if( get_field('quem_somos') ): ?>
					    		<?php the_field('quem_somos');?>
					    	<?php endif; ?>					
					    </div>
					    <div class="col s12 m12 l8 curriculosobre">
					    	<!-- EXIBINDO O QUE HÁ NO CAMPO PERSONALIZADO IMAGEM CURRÍCULO E TEXTO CURRÍCULO - POST 'HOME'-->
					    	<img src="<?php bloginfo('template_url');?>/img/curriculo/foto.png" class="responsive-img circle">
					    	<h3><strong>Gisele Oliveira</strong></h3>
					    	<h6><strong>Sindica Profissional - Sócia Fundadora SindGO</strong></h6>
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
							<?php if( get_field('titulo_diferencial_1') ): ?>
						    	<h3><strong><?php the_field('titulo_diferencial_1');?></strong></h3>
						    <?php endif; ?>	
							<?php if( get_field('texto_diferencial_1') ): ?>
						    	<p><?php the_field('texto_diferencial_1');?></p>
						    <?php endif; ?>	
						</div>
						<div class="col s12 m4">
							<img src="<?php the_field('imagem_diferencial_2'); ?>">
							<?php if( get_field('titulo_diferencial_2') ): ?>
						    	<h3><strong><?php the_field('titulo_diferencial_2');?></strong></h3>
						    <?php endif; ?>	
							<?php if( get_field('texto_diferencial_2') ): ?>
						    	<p><?php the_field('texto_diferencial_2');?></p>
						    <?php endif; ?>		
						</div>
						<div class="col s12 m4">
							<img src="<?php the_field('imagem_diferencial_3'); ?>">
							<?php if( get_field('titulo_diferencial_3') ): ?>
						    	<h3><strong><?php the_field('titulo_diferencial_3');?></strong></h3>
						    <?php endif; ?>	
							<?php if( get_field('texto_diferencial_3') ): ?>
						    	<p><?php the_field('texto_diferencial_3');?></p>
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