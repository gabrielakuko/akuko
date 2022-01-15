<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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
 
 define('ALLOW_UNFILTERED_UPLOADS', true);

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'akuko');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'akuko_admin');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'FyS50nTBDmI7');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql942.umbler.com');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Syk]CC 1@shgpqF*{)E O^X*2f:S%es>j%.L`O&%GcO<fIv!*&u6jyRC6@7:118F');
define('SECURE_AUTH_KEY',  '=A*:bTW&-g:+4Pb&d:&6AyevO0&#~EG{0m):w#Fq$iF29p&?pL[,o5Lo/ayG@![l');
define('LOGGED_IN_KEY',    '+tH9Oq[B`m&P(8c 51#NL6oIB7W>~3=0Pk/<Dby0<7NYbnmk)X0>q0Im4$&%_yq ');
define('NONCE_KEY',        'P9)vHcWM1?~I{U/Irf7 B.>bFdI?#,4IU6F^u0g@y;}_>z.:.B4A@ooLr7y}$-8D');
define('AUTH_SALT',        'y%3,,I>}Y)9^|r.fpz,_6b<P5J@]=$ Sa2LW2XdCF&nK,p1eto]-68L}+o5ZkuYS');
define('SECURE_AUTH_SALT', 'lE@.$8/7|UY4GDn(FMq?!ldnM!fZ,g0?Q])o%a9p4m65_tikBMh%`>6$H]&2[+yV');
define('LOGGED_IN_SALT',   '*VPdd.c>1HTzQKoCn(&;q]w]0~m6PlTPN:TUNLPu%?#6dl-5p? t3KD$?:^Y[i}Z');
define('NONCE_SALT',       'zu3,^[$gotB;N2g:V=%v;X|zTm+#B276|(xrx|,e.|CZ+Zfb>N9tb9_[winHL-mf');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'akuko_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
