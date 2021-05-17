<?php 
/*
Template Name: Post Largura Total
Template Post Type: post
*/
?>

<?php get_header(); ?>

<section>
	<div class="container fullwidth">
		<?php if (have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>

				<article>
					<!-- formatando o titulo do post -->
					<h2><?php the_title(); ?></h2>

					<!-- formatando a imagem tamanho grande do post -->
					<?php if(has_post_thumbnail()): ?>
						<!-- medidas das imagens: thumbail 150x150, medium 300x300, large 1024x1024, full tamanho original da imagem -->
						<?php the_post_thumbnail('full'); ?>
					<?php endif; ?>

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
						<!-- exibindo conteúdo inteiro do post -->
						<?php the_content(); ?>
					</p>

					<p>
						<!-- exibindo a quantidade de comentários de cada post -->
						<?php comments_number('0 comentários', '1 comentário', '% comentários'); ?>
					</p>

					<hr>
					<h3>Posts Relacionados</h3>
					<?php 
					// Pegando categorias do post
					$categories = get_the_category();
					// Fazendo consulta ao banco de dados para  pegar os posts da mesma categoria
					$dp_query = new WP_Query(array(
						// Pegando quantidade de posts
						'posts_per_page' => 3,
						// Retirando o próprio post da consulta
						'post__not_in' => array($post->ID),
						// Selecionando a primeira categoria do post
						'cat' => $categories[0]->term_id
					));
					// Exibindo a consulta na tela
					if ($dp_query->have_posts()) {
						while ($dp_query->have_posts()) {
							$dp_query->the_post();
							get_template_part('template-parts/related_post');
						}
						// Resetando a consulta secundária
						wp_reset_postdata();
					}
					?>
					<!-- Ajeitando os comentários -->
					<div style="clear: both;"></div>
					<hr>

					<?php 
					if (comments_open()) {
						comments_template();
					}
					?>

				</article>

			<?php endwhile; ?>	
		<?php endif; ?>

		<!-- criando a paginação -->
		<div class="paginacao">
			<!-- diferença da páginação o posts fica sem o s -->
			<div class="pagina_anterior"><?php previous_post_link(); ?></div>
			<div class="pagina_proxima"><?php next_post_link(); ?></div>
		</div>

	</div>

	<div style="clear: both;"></div>
</section>

<?php get_footer(); ?>