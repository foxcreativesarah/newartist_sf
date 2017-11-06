<?php
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
define('DB_NAME', 'newartist_sf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~(r[BT8RS|2?X`o015$2ihYR2Y9WIl^}PWs,:[z3yf>7URv-K![pd00/mRwD{;oz');
define('SECURE_AUTH_KEY',  '.+ND+:F*>MYG*B;Rd3pG~R_Nd1<lxG]JFe`.EHcr0*H8p:;HmO~bCP]G,i~ffq1]');
define('LOGGED_IN_KEY',    '^6[0!6FqH_F8OgUB|6>n7Ej<.OJ|jJn`/f$$hei>RR*[46ew^tHkA0Sg0OePhygP');
define('NONCE_KEY',        'i:U5U&7id5_%?+O$4XtbG;?~SdW}>;aqA{P{B8K5mw_M+4(._O05nA2{0WwU~ul;');
define('AUTH_SALT',        'ez~4&G8U5X?O1sG=mE#Ir?<Yzc?]uBR#)Vg>9Cx//B.hxj}j&^^fri>tvmpELy5l');
define('SECURE_AUTH_SALT', '2$-Fw=B<~$WtIM/Z`};1A?$lgrA=FmE@%k>oyG@z Lm1L0:?is^-~$gWL0]uz$!;');
define('LOGGED_IN_SALT',   'GHw{_k6e!Sf7Jd;W~z!$j_7,qxZ(~Ki&n*l8w,Mif1e7*[9|>D$ ny>(*n1`u;hq');
define('NONCE_SALT',       '6dt!$D|XqmpZC[X*NV&7@z{DVo=Y-)dT3+XfI5q}_e6 |;tN?JEntcd7+gcV~C;|');

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
