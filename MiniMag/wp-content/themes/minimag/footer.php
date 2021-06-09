<footer>
	<div class="footer_widget">
		<div class="row">
			<?php 
			if (is_active_sidebar('dm_footersidebar')) {
				dynamic_sidebar('dm_footersidebar');
			}
			?>
		</div>	
	</div>

	<div class="main_footer row">
		<div class="main_footer_left">
			Todos os direitos reservados. &copy;
		</div>

		<div class="main_footer_right">
			Criado por AUTHOR.
		</div>

		<div class="mainfooter_scroll">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-up.png">
		</div>
	</div>
</footer>

</body>
</html>