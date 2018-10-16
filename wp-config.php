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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
 define('AUTH_KEY',         '.(*lGe@1OCrt(<~JY,DG8+ |M7+ InpN374*}g1IG1ilN4P`{D4:*hgjp=Nau}Yk');
 define('SECURE_AUTH_KEY',  'QT=j=.Iqm#`aHz9EJ|tt.^&:.tM,S7yg)[->7/s!92(71z3drs>-|yk;Hw;uq|o`');
 define('LOGGED_IN_KEY',    'loWOTPP^<hf=Ppo#id4g#aHt&8~i}S<,piclq3nKz1jfr79e7zp(z?p<EsEw8+bF');
 define('NONCE_KEY',        '88x]8E+W~+Qd4,;X;1([T1*_}xGKWt;4=5&m*jr]6B+^=nn4%#&k$athA2!@EVx-');
 define('AUTH_SALT',        '*pY4:(*~ZEJR5D-~cx:_&{tb[_ye.vNFL!(GrvC.@Qq/4Um*(GLd U_cq}_=;|`t');
 define('SECURE_AUTH_SALT', '=@)J+f=m&WD VfLROuK}*nj(/;LZm~&<jieD1i;cS$yNH+qm?M[|QJBqnTLu^Qzv');
 define('LOGGED_IN_SALT',   '#Z@!|7W%(Y!{j5;H|;93E|S<Q4viyvk(<Z(e.B!|n<sws.9L!y,.4/aq7oZv!wLb');
 define('NONCE_SALT',       'z7cC*uhTUV/3kAt|_QhAES!5S$RB%|Rueo+}.lzL$%V?[V2i?5r5q.-P>:[yg|ox');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define( 'WP_CONTENT_URL', 'http://localhost/WP/oblog/content/' );
define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/content' );

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
