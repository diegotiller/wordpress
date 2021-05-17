<?php 
/*
Template Name: Página Largura Total
*/
?>

<?php get_header(); ?>

<section>
	<div class="container fullwidth">
		<?php while(have_posts()): ?>
			<?php the_post(); ?>

			<article>
				<!-- formatando o titulo do post -->
				<h2><?php the_title(); ?></h2>

				<p>
					<!-- exibindo conteúdo inteiro do post -->
					<?php the_content(); ?>
				</p>

				<?php 
				if (comments_open()) {
					?>
					<p>
					<!-- exibindo a quantidade de comentários de cada post -->
						<?php comments_number('0 comentários', '1 comentário', '% comentários'); ?>
					</p>

					<hr>
					<?php
					comments_template();
				}
				?>

			</article>

		<?php endwhile; ?>

	</div>

	<div style="clear: both;"></div>
</section>

<?php get_footer(); ?>