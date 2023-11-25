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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'casamento' );

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
define( 'AUTH_KEY',         'LR@K*`kx+jTEst=6w?4yo5UYyhvw4kuIj,=u&;y3+N5(|g#f:7WJj$L!9_{*jKAx' );
define( 'SECURE_AUTH_KEY',  'ya_njKy7_bHE%=@LeF+V>#0?VNg$.@=myB.p^cDgFSL2)Z_[&;d;|#0Z#AwA4iR>' );
define( 'LOGGED_IN_KEY',    'mCqHAfwxIw&n}(^d=)D-)rLuE%`2-&t6NKFr~t1KfH4Semz*9~B(PTsw=CZbi;3Q' );
define( 'NONCE_KEY',        '+[MMZk{BKC@~gvnT(Ud(;b5zYF`zqkITMT/rs}]-C6?u7A{@)TMwr|#n1&<d.631' );
define( 'AUTH_SALT',        'J165Dm~^3roB{VV+aEJm! t_+P.?wQUgcGk!iQo),z4Ye8m];|qj(EOy|&CP2_UG' );
define( 'SECURE_AUTH_SALT', '6.Iya[%8k2LsELQ:6ziNWoWlB~r]z-Rlc#}cs`Vsw/8ox4*X[Gk5s!qZUc@(E.2]' );
define( 'LOGGED_IN_SALT',   'i|YXt2(qN<KRxp0n(}bO#rAZJmZd{ lwQ6c{m7Q=K r9rz2O)}ruo.n+]]]Xm6of' );
define( 'NONCE_SALT',       'Z/h%VGvrJCqO9^5`eHPos9N}XX;*1fy5s;lVdD)ra>i4sB.CIDCGS= Yv$8`o`)N' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
