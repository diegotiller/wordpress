<div class="post_related_item">
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

	<p>
		<!-- exibindo a quantidade de comentários de cada post -->
		<?php comments_number('0 comentários', '1 comentário', '% comentários'); ?>
		<br>
		<!-- link de leia mais -->
		<a href="<?php the_permalink(); ?>">Leia Mais</a>
	</p>

</div>