<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'Testdb');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qs|6`<BWj{T_|7{~{-nA+`/YXnZf0sHxSMj4B0kh-)nh-B0]a7+N:-%dmS6|6bi6');
define('SECURE_AUTH_KEY',  'Vk6#%(=xTE8a(|&bB:6(rKD]sgj0[2:J$27x8$*N^@LOXu!VwVm!-^@4z&@RD4H=');
define('LOGGED_IN_KEY',    '^@#+fkCJh|7sfirj#;<L #H6|ody4Y*8[H_|^V|x)Z|O%p3HDP{#UpVyW:3]]c-?');
define('NONCE_KEY',        '~[+o.WaB9K!|L dv?LrALI;Bhe7sE{c_.<mKfZo>iFm-%;kkjUjfCHWuvWWxM:uH');
define('AUTH_SALT',        ')6nJ+ C.wn);7ti+Y4eIxJVFjTp>X|[XV,Tl+qFr(*dazw&dQ5X{6xK+R{3%pwm3');
define('SECURE_AUTH_SALT', 'I&]kK5UfB -E;?%31DJh@#Ou(|b=+@YjlTL^FH e8i1gF 8R49?t ^a2L67K#<ZU');
define('LOGGED_IN_SALT',   '+ojucU#gj#+},g^0>B`742Z:3R?si9&m_SCh|LzXP0%}L*Bs?kRY5?!zX]5%V|~,');
define('NONCE_SALT',       'hif~F|8x9&m_M+,P/(Hl*P)&5L.|B#6gy00U8V2#dj-l})l+-.AOq Bf&&t;^WB#');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', true);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');