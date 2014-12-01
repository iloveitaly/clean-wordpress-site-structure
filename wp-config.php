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

// http://codex.wordpress.org/Editing_wp-config.php

define( 'ABSPATH', dirname(__FILE__) . 'wp');
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/app' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/app' );

define( 'WP_HOME',    'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp/' );

// enabling this will output more errors
// define ('WP_ADMIN', true);

define('DB_NAME', basename(dirname(__FILE__)));
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost:/tmp/mysql.sock');

define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         'yrkr/6JHsM,^[s4#n*<O1P-(<!W8b2?gAbV`FAt;*Kb|T~RK^Io`tS2TNNXT_NH7');
define('SECURE_AUTH_KEY',  '[GmvEiJokr$Eyv3nkmG{-9&)8n>m%jfcga:f,kYdHHi4fCiEJG%-6R[#-*zgF$*D');
define('LOGGED_IN_KEY',    'WM(^DdQ{[k}hH_/<c%Atl:$~)s+>#f!T=bu<B+-o,ox--h;P4b$98Nj~h0Q4R;5/');
define('NONCE_KEY',        'EWdiUqOT}K#P4v4&3H5M,[s_)4#;7FLg7!O26H4~0wher3_$y<%>XTiE~y9ondbY');
define('AUTH_SALT',        ':wa1uB_l%t5l)5sT-ZM[+HP1@n0IWPhqV2UIq>1y%CPx-g0>R+$Y;=3}Kpdi~vs|');
define('SECURE_AUTH_SALT', 'PtjA&fP;{T_.brzu$T%GElP6+ZJf|nu|NyMb$Vut9IJ*<2X61jxaY*r.}#k-KgU[');
define('LOGGED_IN_SALT',   '/hj]d>>0(HW21 f?:gbi^G)fF**6Gq]=}tMBl1J.Vk=#343H#h_91m<6>O`%65N5');
define('NONCE_SALT',       'N_>VY&lpvt`]|q)NwQ@i!5;f-~`(4/[_6OzP0n(~Aug@$DSn7]D,Dl%|-^+(Le[)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
