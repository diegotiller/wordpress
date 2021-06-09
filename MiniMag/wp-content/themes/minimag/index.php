<?php get_header(); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 maincontent">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): ?>
						<?php the_post(); ?>
						<?php get_template_part('template_parts/post'); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>

			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>