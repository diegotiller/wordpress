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
define( 'DB_NAME', 'templatebootstrap' );

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
define( 'AUTH_KEY',         'BR;~,gR(5@v.DheB/.pTArgpU=5g.rF{{tKk)qN*agv3E/])mC]IASTZHz?$g)fS' );
define( 'SECURE_AUTH_KEY',  '8AoGj{ M@>#|DR_)o_jypa2wQxSu7`)C,drp)P}_%(xqHw6l0YlwW2fA3nV*6xES' );
define( 'LOGGED_IN_KEY',    'qi04i.rhLGnTZ=&&uRGYZjnfhf)osP`}eW?Lq@bNT><0QZ(s8RM44Y@.rfP0kjoJ' );
define( 'NONCE_KEY',        'L,/v&!Rg&U5ixbe]=+Fk$zybGEh0{.(S738d?7UGizej)%9 u4DW:%.LUX;G^0@z' );
define( 'AUTH_SALT',        'g,qzhyxJ+7Y1>uP<2?qDgpGGrDSpGSB6F_+9<PkYwn`/9HfPAA+1nC*-B_Z9#i13' );
define( 'SECURE_AUTH_SALT', 'yBCC|A@!tNKv3!4XAy&~5J(D.0PaA!zaO@jL^=>:L73CwVIDyb7D4u/^<uYJ:DMu' );
define( 'LOGGED_IN_SALT',   'x;cv|i~@}/Op5ORem=.6fAbT0T}WYUEH)yi%Lyi;;~M!zCo+fzes906$uzG@@5`(' );
define( 'NONCE_SALT',       ')a?//-#p!EL9f#:va[$(%M,q}K}l][J?MlS0oQ9KPMDT(!S,h[@DL$NkW2H6d/Lw' );

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
