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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'sindgo');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Eij5EQjC+)1fS(+f3:7_T1KmqA&(ubY}ZE6Ed]uh1{6j(EMID*j5xSpRRx!![+Se');
define('SECURE_AUTH_KEY',  'W5yBZ )s]gcZoM@`XwdiXe1S)me8=)QZ/*,LB(6,Z]a0LD[Fwk]yQ^&m/Ejri*3d');
define('LOGGED_IN_KEY',    '9ZG;o:E*`Rb<GW7;gi~k8z~:_? ^D )zk!Z-S>ma;JlFzQc:$!~5!Elg4T9mzLT@');
define('NONCE_KEY',        ':@Ur.teO6*imm]uN$[D*Vymg+umY^E)9APN3[uIne1U#*Qi.H!MUguMN#Gi_{EK[');
define('AUTH_SALT',        'R,|7 T8-Wyk;O<n>_WVRj?F$5x0aM4t<DYyiVz<jt7 i]j~M`s[ v:]VaF(I.et3');
define('SECURE_AUTH_SALT', 'g,ew(2)aF$]iWnE~#9f|wa{CXaxr%^h V~f6^*XRJ_ZFtfYC|R2bfyA@Tspm_s5=');
define('LOGGED_IN_SALT',   '?KEZL#5-+Bu~#=W(1lp6!*`tZ$;w^li<g`uw  (gv.YgS*jZWMGy7tV6>]N=4%YJ');
define('NONCE_SALT',       '#hhnu|lcsb]hpa|Xn!FE8Zet#{o$;17>dvQ_-90`NT`s3,~?P#vE.Mvy[kbbn>C_');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
