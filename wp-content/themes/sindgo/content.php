<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="parallax-container imagem-topo">
		<div class="parallax"><img src="<?php the_field('imagem_destaque'); ?>"></div>
		<img src="<?php bloginfo('template_url');?>/img/logo/logo.png" class="logo">
	</section>
	<div class="container">
		<div class="row">
			<div class="col s12 postagemtexto">
				<?php
					if ( is_single() ) :
						the_title( '<h1>', '</h1>' );
					else :
						the_title( sprintf( '<h1><a href="%s" rel="bookmark" class="autem-text">', esc_url( get_permalink() ) ), '</a></h1>' );
					endif;
				?>
				<blockquote><p>Publicado em <?php the_date(); ?> por <?php the_author(); ?></p></blockquote>
				<p class="texto"><?php the_field('descrição_postagem'); ?></p>
			</div>
		</div>
	</div>
</article>