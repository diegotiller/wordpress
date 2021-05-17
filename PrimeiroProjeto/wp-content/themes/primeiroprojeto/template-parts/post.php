<article>
	<!-- formatando a imagem miniatura do post -->
	<?php if(has_post_thumbnail()): ?>
		<a href="<?php the_permalink(); ?>" class="post_thumbnail">
			<!-- medidas das imagens: thumbail 150x150, medium 300x300, large 1024x1024, full tamanho original da imagem -->
			<?php 
				the_post_thumbnail('full', array(
					'class' => 'post_miniatura'
				)); 
			?>
		</a>
	<?php endif; ?>

	<!-- formatando o titulo do post -->
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<!-- mostrando data, autor e possiveis categorias -->
	<p>
		<!-- mostrando a data e corrigindo o erro do the_date() -->
		<?php echo get_the_date(); ?>
		|
		<!-- exibindo o autor e o link com as postagens do mesmo -->
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
		|
		<!-- exibindo categorias do post (parametro passado entre parenteses indica o separador das categorias) -->
		<?php the_category(', '); ?>
	</p>

	<p>
		<!-- exibindo conteúdo resumido do post -->
		<?php the_excerpt(); ?>
	</p>

	<p>
		<!-- exibindo a quantidade de comentários de cada post -->
		<?php comments_number('0 comentários', '1 comentário', '% comentários'); ?>
		|
		<!-- link de leia mais -->
		<a href="<?php the_permalink(); ?>">Leia Mais</a>
	</p>

</article>