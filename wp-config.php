<?php
define('WP_CACHE', true);
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nguyent8_nk2018');

/** MySQL database username */
define('DB_USER', 'nguyent8_tiendv');

/** MySQL database password */
define('DB_PASSWORD', 'doanvantien');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MPa+DTT7VH7YAgTtRKgcHlIN/<w!/|CLv.|oXk0[IS&3.F&Q(@_|/tH@y8rAv^t|');
define('SECURE_AUTH_KEY',  ';m4x3/Q?nQl>wm|@bT4&$MD}DDYPAX#0b;vZ?4Fo*PyRa=D+XPhYW=6-sp04Yy2!');
define('LOGGED_IN_KEY',    '`{=^<*VF$EBUkbu0T(Ds)tv#Q>-C~9Q(#XQEkj49j^L[c<o3 P?7Rd}e.3z{]xna');
define('NONCE_KEY',        '>2|fTF]PuIX{WVq@ 4dV.j89FrLc<AGJJh>dJ8 +p~!RR#iGb,iXXw~?dB@Hu(F9');
define('AUTH_SALT',        '!L^%`mue/PX8cET DkM-P{KGb8Pri i^i,K`INs`;!oi.9Up&^fOCUyMQvX 5p n');
define('SECURE_AUTH_SALT', 'T-</y_*/4[%ch[+RB6-JqOmA(r1Bz8r/t&T,sEd}i)=XImM`$WOpJp+X+EM,Y<uO');
define('LOGGED_IN_SALT',   'DY(r+fG;WMk9rd^Rs<`R<ij:m0CE6T1G?I 2;o$hyv A)Gj(!P(c@NZ@{v37/L,.');
define('NONCE_SALT',       'oF(^%#p]$rg#w=HU4|#ixw!d(hWz~-@#>Zrv61A *H3{3kv,Ub|eo~TXAXm}I8R=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
