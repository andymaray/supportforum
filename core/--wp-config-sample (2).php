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
define('DB_NAME', 'supportforum');

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
define('AUTH_KEY',         '-oQ-K*fws:V_w%w_C#E_]D#U<u|];AnU}Ty6<N%Gcx=hfJ_/ 5g| JEQ+6eu26Rc');
define('SECURE_AUTH_KEY',  ',=;T&%d-Yr{-G7XE5Mu~h~gpkf(]&`5$|w`80WVM;s_tEFN|q~dWF@11SO!pP0=u');
define('LOGGED_IN_KEY',    '&s)r,8>j kH|kVynYu`8RMA[3pijxF-/f*{LaeS+a<6T,O|Cg)vsVP*+#R,c7(4~');
define('NONCE_KEY',        'VV+1jG#ZZ+``G6+g%T-XBu)/!tQJH}gV|~XX0rio).{mK+c1epBq(tBiU?y0x{-0');
define('AUTH_SALT',        '8/h9<~V-6{;m9c,i0L2F>x{nO0D87m_w$x76[8oa;6tOPWSr34GtBQZ<MMbZ;,vQ');
define('SECURE_AUTH_SALT', '>}VxA2}|@CzPFf-n;X4Nij-8o1z-e0vS~-;IcCV_.+GYT4Hmi&67rpMV-mqbalb.');
define('LOGGED_IN_SALT',   '/}qc(P+fJlr[c+2b|:izq]hE_i#$n2/Ue:?JT4#Li6Op5o=nC@8q6-FFK*%-+]n,');
define('NONCE_SALT',       'OHM?8Lt9mP&/D[=U||:fR49|=D10~Tcx:x=p~#,J3jzIi8t#qjKb#?0IMQ<E@ye1');

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
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
