<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-MJUg~-/p}]s*pa]Q!4jiwa0]<BoG)!yd-iY&Tz#-J!GG2}RjufN=,khR_ed?X>y');
define('SECURE_AUTH_KEY',  'G%&whKYOECXMQ!2.b `da>PW{5&GYQ-evG[LCQ[l6j: +yxp%m-cSFTK-kmF,D(&');
define('LOGGED_IN_KEY',    'g6*bN>B*D8r9;Z:tF(v~R Q/9cRw+%~$G |1=6X~*5:sk)&d`,:4z*=W-`sZ!%w[');
define('NONCE_KEY',        '5:3H0Scmz19|Y;?g._PyS7Gz/%&lkE4Yw2&.S!N7lI;UaL2n!^gu,mlgC$Xk[wRM');
define('AUTH_SALT',        '%VOs^kGq7`GD|6Q6b|W^#*|SC+D -exa?|;k*[{Tx8`)Kk6uu3@y] KMM>`~P|sO');
define('SECURE_AUTH_SALT', 'iE4DqT#)2lF.@E?i;EaE]z?KNGMjFw&7V2B$03+`a4)CTx@O0|5)$?32,Orpe?av');
define('LOGGED_IN_SALT',   '>RTX~k^-6F=58wU4?HW&]gtM<$ZxA7STCZ3f(4W:tPZxa/_jG-Eh%v/t-.1YDN-<');
define('NONCE_SALT',       '3+e#->ZkhH,52%gqATa}b7/M&!Lj3~P!c)g|=//zY>Z1H0U3H&l:5IJ9-:o!c*8r');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
