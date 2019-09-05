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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'u4yx^SuPB-o~Dvg,9NMb]cTg1g*>WRa<@x@|D(qX:|WH=L-C.`V| D;Pt@:vp&WJ' );
define( 'SECURE_AUTH_KEY',  'P{2|Ae6D{mzvMJQ;0>x3$9ueL)@|v)o{h*1/uTLv^j5|nu@vBq+TscSRJe+rJ,zW' );
define( 'LOGGED_IN_KEY',    '~)qXoeXu_a#8>$yog}Jeh%4$nUIz@X0}#{;@XfU^9cqM)WR9o~y6Tse{&pXCT&NX' );
define( 'NONCE_KEY',        '`#)y-vDGYMck06q32B9g|u]YHp3@W6k:O:ld?/]BewJ?0r>1nL=bb-t?`@`l6c4d' );
define( 'AUTH_SALT',        '0+mjL2I//6pLy[M :g5S]))TDXPyhl1K[@x>6P_vJbDDaOKVs]ycrFFf&[IC/ iH' );
define( 'SECURE_AUTH_SALT', 'QRA0Lf(6`e)=*]NMUIffGmk|Bg FR25.)|fFBE=0<B{>^S9qz{H%_t=dQ!Je1aKa' );
define( 'LOGGED_IN_SALT',   ',[;Cm:B(J0w!HD!*:8<|;!6mS!7se3Y{ezB( lflHce6l|m$(]3X5FJtb}*uLhFD' );
define( 'NONCE_SALT',       'z%mPp^wg!B[L!H%p?[h8W]jn9z9Z<4l^Nl-w//GIksK%SUy/OVq$TLVqFg*6d}JU' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
