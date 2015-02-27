<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bogota79_sanctuary');

/** MySQL database username */
define('DB_USER', 'bogota79_sanwp');

/** MySQL database password */
define('DB_PASSWORD', 'sanctuary');

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
define('AUTH_KEY',         'Iv-3rmj/$k3BC_wR?%|<AJ3gZX[]pH%W*dsI(z41_XnJJ]yVZK|g+m=?iH@mkEe ');
define('SECURE_AUTH_KEY',  ':Qa:]*I8vf*CXVw`6O|Q0DYihmpCa-Fj{5 8WBop_$<p.&cr ++0%|GYS=b;UF?H');
define('LOGGED_IN_KEY',    'M!cO|AD,-4/6l&l2E@Y{:-XgNMV.5^pTcqaZIfV|?-vXO#A+DGhGG@&iX8kv!bJD');
define('NONCE_KEY',        'SEaJi?S==W^)%n3BKzsffTdaJNXvZhjawN_e+$nW=*/ng3au~Rk)gC/uopMbf{3L');
define('AUTH_SALT',        'sg+-hM-XKR<vs-dc1U{<ejWIhp_xeq|N@I[V*{N%pC-2B!<|fE0XDG[e[c|9c(;?');
define('SECURE_AUTH_SALT', 'vACbO0[[L=1!I-2,g6e-|}P:s_%9V8W%,{$Yj7W3Y|(jy3.u+JU+-:.=}^&](&W!');
define('LOGGED_IN_SALT',   '&A!y(Jj+[OX[D}^3?h[!6W(Z=[[/yL50M%{cL|ro+ ={#+R!r&ITGs<z%vk=q+t0');
define('NONCE_SALT',       's&Mi5V_5DQ3g|3+U-Mru-@Q3HgT7,X?B|s( a[l;2_7KSXE#l^^Dr;5-wG&o-o&3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
