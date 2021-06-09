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
define( 'DB_NAME', 'loja' );

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
define( 'AUTH_KEY',         'gnO3uuDX#_? Dj}@I(q(&K009q, `jdN,8OS=aj82v[&`oTNAU Bn/f5)l]zET#G' );
define( 'SECURE_AUTH_KEY',  '[yLE*A/lmi99sU3IV@?y$j=_Bs$wue<%,3qT)r.hb7Z1Iq_1zxQD;Q,m;[S(Ik(b' );
define( 'LOGGED_IN_KEY',    'vbT=HEn;#qZ&{+e(M]zt|Z|L>u1m@T9!S0M8&#JYVy|{khG2#Jte!|B>jUEg_W(5' );
define( 'NONCE_KEY',        ' ~rx trX4V2/uPwJZO.LD(CNNT.d56oUds`lkY/j_}{VkTV:p(@Lsm jZ-pw$y&!' );
define( 'AUTH_SALT',        '7fz1r9!D5M$TGl_`&l]%^&?d~?35L_AG%V&jD~C^dbgV-m[D.$F|rS>8|b4oLUov' );
define( 'SECURE_AUTH_SALT', ':KMTTpZ8>3!{Vt?6L9^wMyz_%PVkarUiAEA>7f`Li)c#/p7]5XaNVwbBW)(ZCa+8' );
define( 'LOGGED_IN_SALT',   '#]?%}9&*Q$2`=~&i+73+2Ob2FkfDTr[%0(<Zl&QVl-Bmqe%piM3sk7|<k($3M(&(' );
define( 'NONCE_SALT',       '!ZHkpA9S*#.!Bg1/ip/#|xKotO`_j$:I+AmY(G9!gya$>G8M5)IPt#N9.m&1&5i#' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wploja_';

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
