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
define('DB_NAME', 'UMUNC_MPC');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'PLACE_HOLDER_PASSWORD');

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
define('AUTH_KEY',         'H!5X4QZ?x`l%a$CNJ56Sfv Wf8{bvpu C_,m#Iaw|qQ:i}~78F7!0p~uT=,-)O,q');
define('SECURE_AUTH_KEY',  '8w@S#8.-2<Nm(_NpG+Q<|+h#+:<][YzTP:[e!ps(a}3)^W{jnpLkc2Jg[jD<Rb8X');
define('LOGGED_IN_KEY',    'jX, ?) IV.lZLi(s),hgY(SNdr/Hy11:1Q(kU5_N0@Aq2/yi-o<@ph[*sc+,W--{');
define('NONCE_KEY',        'lRUU$3;Wb!$J+3(2m`UOph-4&@8;Z(+#WIZ5:H>ce,tBf95=8f7faoD|SE-N<!kv');
define('AUTH_SALT',        'RuRg;WQiI2:vu{~xvKO/hU+H_|/wFy9ls0}3_M+[` pw%VgbS0)S?VCwj]rIfHZ%');
define('SECURE_AUTH_SALT', '1T<$-w&}TCF&z,lu?~h+F{T{`YV4;b.l+mYxp]!LG)AB>Ms4]/,15n+#:2MB&/Q5');
define('LOGGED_IN_SALT',   'Mv^CGrdyzk/9k2L47wGvP>2+*S:+|XW<4&Eg79eG8g-kh+Ymk5iI^9 lu<P!W[JD');
define('NONCE_SALT',       '>-9.zZD4Ghgx]T?0~M-J0|9Tv*egP#5udSs*<&Pu?<v%yY6Oj&ycDkh`GYxdLyx%');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
