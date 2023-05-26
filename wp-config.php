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
define( 'DB_NAME', 'pacini_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'secret' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '#%Zm!]9S]eiw~&ewiA+=Erlx!pWKlw>65}ssjjQiCwN|GGjvI67{jZ>R4Dsclr/j' );
define( 'SECURE_AUTH_KEY',  '=p7|L2-w||]0vdk>/zOO7ef05g1<qFP_0e^U]ERAD9y-Tx!,[l7fXIXGNLn$,xX$' );
define( 'LOGGED_IN_KEY',    'o;*gdZgcL`/#l6Yj0ONao2;Ii&Gpq>AIY,FlLyD{9}{n5%9I$}+Gz<:p32%X+I!q' );
define( 'NONCE_KEY',        'h<J%mIPn_.o`Af=i(>6Dn2sJ }5`q:zj!Pg>Gg!PmIL:TC,L0b#Y1E/f2zq(L aW' );
define( 'AUTH_SALT',        '<uf`~lxq5MT7/9RGZ`a`7,WCUnJ|h*R{&&$e#xqGu( {2Kn$H}vAlZ=2-K%%y,}f' );
define( 'SECURE_AUTH_SALT', '2lP]I]|WM_F^_DEk7T|HeLCM`rj1guiLVVkhTsQr(b971SPf:#,b47kc~HF7L9{}' );
define( 'LOGGED_IN_SALT',   'rZaCIM3*xv:S1|t.Hyhj%ts*ipZ6M[N]%B&CL!>RQTc8E{6-W-rH?m-i@[TC*qJZ' );
define( 'NONCE_SALT',       'MP4w@D$jxhSJOXcojnYJ+=R @Acs2Sz`{0xp$i}7KY0D{!]u@e2$~3[<OQJRD9!!' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'pc_';

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
