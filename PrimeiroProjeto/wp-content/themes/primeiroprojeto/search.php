<?php get_header(); ?>

<section>
	<div class="container">
		<!-- Titulo da página de pesquisa -->
		<h1>Você pesquisou por: <?php the_search_query(); ?></h1>

		<?php if (have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>

				<?php get_template_part('template-parts/post'); ?>

			<?php endwhile; ?>	
		<?php endif; ?>

		<!-- criando a paginação -->
		<div class="paginacao">
			<div class="pagina_anterior"><?php previous_posts_link('Página Anterior'); ?></div>
			<div class="pagina_proxima"><?php next_posts_link('Próxima Página'); ?></div>
		</div>

	</div>

	<?php get_sidebar(); ?>

	<div style="clear: both;"></div>
</section>

<?php get_footer(); ?>