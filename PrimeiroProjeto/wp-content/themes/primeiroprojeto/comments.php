<?php 
// Função verifica se os comentários precisam de senha
if (post_password_required()) {
	return;
}
// Exibindo comentários
if (have_comments()) {
	foreach ($comments as $comment) {
		?>
		<div class="comentario">
			<div class="comentario_foto">
				<!-- passa o comentário inteiro na variável $comment, e o tamaho do comentario no caso 60 -->
				<?php echo get_avatar($comment, 60); ?>
			</div>

			<div class="comentario_area">
				<!-- exibindo o nome do autor do comentário - exibindo a data do comentário-->
				<strong><?php comment_author(); ?></strong> - <?php comment_date(); ?>
				<br>
				<!-- exibindo o comentário feito no post -->
				<?php comment_text(); ?>
			</div>
		</div>
		<br>
		<?php
	}

	the_comments_pagination();

}

// Criando formulário de comentários
comment_form(array(
	// Personalizando o campo textarea dos comentários
	'comment_field' => 'Comentário:<br><textarea name="comment" placeholder="Digite aqui seu comentário..."></textarea>',
	// Personalizando os campos de dados de usuários não logados
	'fields' => array(
		'author' => '<br><input type="text" name="author" placeholder="Digite seu nome*" />',
		'email' => '<br><input type="text" name="email" placeholder="Digite seu e-mail*" />',
		'url' => '<br><input type="text" name="url" placeholder="Digite seu site" />'
	),
	// Personalizando o botão de envio do comentário
	'class_submit' => 'botao',
	// Trocando o texto do botão
	'label_submit' => 'Enviar Comentário',
	// Trocando o título do formulário de comentarios
	'title_reply' => 'Deixe um comentário'
));

?>