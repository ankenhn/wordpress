<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Yu57a-@Z,lI#+AIm7*S+)+B0;+nDB+cHp)Cf%-Y!r oeT+bnx0v~I*Zc.-a7BR+I');
define('SECURE_AUTH_KEY',  'vnL)?ru:V*51YYMPa0b*|a;;zeLmnh(H62A>JsyY{z1D++Hi Fp*yvw,HavDSnCc');
define('LOGGED_IN_KEY',    'E)F;lZcESq8dR1U`{}gk+T]F#A v2t;BJ:(%8)kdKh!Nj3hV(r%7Fa7miVy*mINR');
define('NONCE_KEY',        'V=WGj[byOa{E 59`3k#kS8|`lGYe-b6x)J#5[z@H4_G2P%H?;Whu8Kzu4ZD?} JF');
define('AUTH_SALT',        '}~oViO` LJeb/Y+gjoBspyc+jGd3`uEc%{SxLRMac61QMaRHLSYW}tNZl-6{mhg ');
define('SECURE_AUTH_SALT', '+G]_%(g-Q*bT-/|o8^st=1Ag#IhVUI>_p`8u|lzh2w5DtdD*kU0A3Emv<AMpQ=}X');
define('LOGGED_IN_SALT',   'AT` ($5+-$xD5#=w33?SVn4d$nQRE4Z/OH?d]D:sXb^jIg_Xf|IC$klsU#Z76ei&');
define('NONCE_SALT',       'VY?4$_HbW{h324U%Qe1{kZZ69H`.-LbMK@&h7e-Zc.c@C@pSVWHLr>i=0k]:U%-`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'monster_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
