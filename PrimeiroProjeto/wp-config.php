<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'primeiroprojetowordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<+CA/M/c7<9-:%kibN)QR!Y(|mgm*&0(%|Nt] Gsa1)gHXgVYxnA)@^Su^b0oFGa' );
define( 'SECURE_AUTH_KEY',  ';/JtlI7L*dQtA$gGXJ<diQZBikg2<7>!v6lCxHyGb} GV{<a}&gLS~9D#bv^t5KL' );
define( 'LOGGED_IN_KEY',    'Jf+`&pm CS.dz%b_9^}=iuxt@ko>,`qHo_7<KdTZc,-:<kZG?UL;6>l!HH~V];|F' );
define( 'NONCE_KEY',        'LtUvXw[|Y%NN1-l(P{6N ge}tV:>Vn))5A+2|]PjX5%l]jiTNSh/EF%7Z2/qa~N-' );
define( 'AUTH_SALT',        'PWY7h+]s5vM}F`7F47-O9dtE$$.9|r&@1rq+d[3PEPr{:I-n:?@M.V-mUz~L`c^=' );
define( 'SECURE_AUTH_SALT', '`|==(v{Sxs}PEw6ItU>-bJ%8WCiB_kr9vXL,2u{BW]cjsr}33n>BdzwGl+q!G373' );
define( 'LOGGED_IN_SALT',   'Fu&D]2{IQlz{b}DbGNssVH`|H?6;~yX&ORu>5^mnv[J^*7e3Uko$JvW;@~wLytq ' );
define( 'NONCE_SALT',       'Dq6#:6,wj9Wm<.$Bmy?YXA,-4yscxAmL82@B*mq./L Bj~S-6<]MKdY->pz20fsg' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
