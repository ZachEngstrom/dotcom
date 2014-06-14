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
define('DB_NAME', 'zachen5_zecom');

/** MySQL database username */
define('DB_USER', 'zachen5');

/** MySQL database password */
define('DB_PASSWORD', 'Zach1986');

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
define('AUTH_KEY',         'y*^id$.#VNzJX3oaXSwd5Y?TALDx+1-w(lMGerXv7I`=*(k`.e,d=D-&FePyY_?{');
define('SECURE_AUTH_KEY',  'o|:lR#+gb/POyIJ4Rg ;!GlDh=<N=dJMVzOGr/W#T_|h6U;qj-BBO>51A-<~5unI');
define('LOGGED_IN_KEY',    ':k;RXV!79apYW#}#P@bqD.5mM)h-FYbXB/9[T=6dt[^uro=@vHRlU7QXkp4c/)hG');
define('NONCE_KEY',        'n`_$ %%||ckn7&E@I0}z!ZQfz36Y:bfa9y?GNPc+H I{dLA_z7yin~$&Y~}5U[M-');
define('AUTH_SALT',        '0h+]y20`$}5?8ZzB-$H48TtcxDhu)m6:6q7cpXMwi$4NBa8$wF(CG zNnDDwT,|v');
define('SECURE_AUTH_SALT', '$r{BORyro!f%Ny$21X){:_Gz|19uAP|OC=MNfBw(!=1v?LM9ku=[iTh}j(3;q#~5');
define('LOGGED_IN_SALT',   '`)%>X9I!-m|OU-II5p(=X+|-xnW6_[~@xZ;!bDz>>IHh1d_Zx>?0}}E#z@i(#VaM');
define('NONCE_SALT',       'r;F1u-=+u}S4Fw-_8A)iW(q-ow>|eS$1hS,W>j6bi</4q+93w*cZ{t%|0(Wme09X');

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
