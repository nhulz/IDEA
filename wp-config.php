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
define('DB_NAME', 'idea');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'T041-lf%Rju@C~X/q^-sY|^eWz;s-c1CXV_vO+*ZI^yx2n-GPH.NcEh+|ICb@|LT');
define('SECURE_AUTH_KEY',  'I./l-kXrY?OY_W&20LX5Wc<qt_ {wt`#&NM_.)-A An%+C-rM_,}]a~+V#Hg^5(C');
define('LOGGED_IN_KEY',    '+M%M4}M|N,e+<:Cn&O.[Am)&[-u-GPlux#a-%tYFa@%|:8p]O|HCwEjkXZ_AK3_1');
define('NONCE_KEY',        '{t|3|+C ,wi-qOJ;RN& kN):qt^xK{v9!KVeu{@W_KZ!qDmH0Aa&Y[%+[)hd9x^w');
define('AUTH_SALT',        '?M[}N0#:~4~[1BCv+=#+M`}CRAg{bry~EhHU;e-4> Y?oCs!0TvTIg=n+ddfI8Sa');
define('SECURE_AUTH_SALT', '[:|`>6XJ%<yA;73O,`_){R zeSR?Gt-0SO`-/uxf|(z+</)8Kvs|MZG;*r!>?gen');
define('LOGGED_IN_SALT',   '/AC-P*TFz}EJnjk( JK!`$|vI2wuEEAbDp}WYw^G2fh :g,7:A&MOZ3an-X.{f^<');
define('NONCE_SALT',       'D%cSrT6T++M!~7N#f){QKUo>mN(hlm:*q5s27CU.HVt7v&hZy+#3-?V$^=y9}y,^');

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
