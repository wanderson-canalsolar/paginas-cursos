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
define( 'DB_NAME', 'banco_site_cursos' );

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

define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         'vB%~MRdDfs]emZIXH#x1eXwRA,um|O k=E8B <nqI.&x}y`)GXO,Lo|%bi)28-! ' );
define( 'SECURE_AUTH_KEY',  '3$L#6&Lcshh95 xL H$b_:xnM@YHmOV-C`{,J^^V=}~zu7N8OH:d`otVD3Nyl3|H' );
define( 'LOGGED_IN_KEY',    '7+`.6c|4U{7zX_}5mG&/@Cw!Sv(b>oIUnLF9&xrF?f $,TiBH(gFy;(8a+GPzSBN' );
define( 'NONCE_KEY',        '_86xdM~ECP.L6$.n@0@,qn}njTBjsb;ce]P!;ZtT*NHPd4<xjo71.Bp3,E.<xB%k' );
define( 'AUTH_SALT',        '3Q_2P~D@GM_>^KrD5%DGK/[<$;3 1fubV|Da7SI,PseIp?!1O..tG .@R=$B$/BW' );
define( 'SECURE_AUTH_SALT', '&;sj0]um4KxyOuw5A8 I%HV^gM`bj.IC^$-RFNh[8V|&l<`8d_#w;S(`)b};>IP ' );
define( 'LOGGED_IN_SALT',   'BV#[%Bf;:rhT6n]~~T?&Z`kc+gfy=?`^F>^G}ml$CfUu*a>1%bY!{Wi%pNO9yDPO' );
define( 'NONCE_SALT',       'q^P}1Ppj>:4GUe>eU--$W8J2Xa|.Rm!D/]f;}+6o]g.h-,qKFa/TLD!Mt>VJ~;8|' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

