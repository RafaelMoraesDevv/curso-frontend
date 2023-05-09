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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'LVSD)7ME`C;Ru$SF8i3aOGN 8s!z7T/5;cv~zXqm.oB905D.xu.:A&hqRO~CvIt{' );
define( 'SECURE_AUTH_KEY',  'B%^*~F2cjpBq&9Ev{O,?^VJ(a>^og{,RJ+gf{M)M8n`EW zFpA{CW>pv^*cT271!' );
define( 'LOGGED_IN_KEY',    'I3x#KtOmrE%bp%9K ,tHhSo;0v!bb5Escn C8Dp9^ sJrM+BzKqY09*+5S|;g+%Z' );
define( 'NONCE_KEY',        'CE1HEN`O@W)Sv`KMhk#g&>$aZi=o|4}f6#-*C87S(x]4p)WB& rGohk!9)upAc7/' );
define( 'AUTH_SALT',        'a.ML[R7tS/$X}RQ8hQNmi.J6(%^`1pUw^D+6w+PZn uv8?Q22(:[]m-[GoLCQ,`k' );
define( 'SECURE_AUTH_SALT', 'i,sw(d>/wo9yT(e=>?=t7Ehc>rTBh(>~U(sSPkAozueTE78R)7r.Z[yncs:Y{bK4' );
define( 'LOGGED_IN_SALT',   'G~)]R*@tfe74=Aa J$>gKdU;;LH/sI|y{<tkg&gK-sS@l(n%>?qyE+%+x,`UDQ>v' );
define( 'NONCE_SALT',       'p0x1_tG5uE*E^0#$Kri=x?6+mt+j[en9(v/##85)s@vY:LhMw>4BH }X(%OrmIhL' );

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
