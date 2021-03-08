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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'jfeuilla' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jfeuilla' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '15|F!j~o{?@IF`KcpWTmRlS`Z.-[K{|5%8{Z-%d^dI=wnGt0A6BW31|+T!;5=,Y/');
define('SECURE_AUTH_KEY',  'cKLxdKdi,;<VPZ>vPUo-}pmC+lY#rR+>&9X~?2p-wpLsiCX|+lUYqpvFQ=_0$o)F');
define('LOGGED_IN_KEY',    '!bOcxweTs+#y:aU(NCSN *iCWf=hpV9_deHBo<6 siSaNd}[8l#B?71|Z13}QR7W');
define('NONCE_KEY',        'e%(kF-U=<QHHc= u_/w.G:+jo-? 6ZW)x4+I^wD9$}!<[KE!=o<<N5lL,$[%|sD+');
define('AUTH_SALT',        'CJCV7JzNpR.7Kmi??(|w`hLl!`6DSSNFJ!G}my+,cv,m{JQIXo5?K/T ~1Ha2!JB');
define('SECURE_AUTH_SALT', '(VBK>-tz+80FdxVTD|+eOKSTVDZ4*%(>M?6/o*;fp#5f*qx~9R6E6U@TNEH}7`Jl');
define('LOGGED_IN_SALT',   '`1j.o_4u9lfI-DeAq|,RjP7Sl)yB+.P-FKT;V:_fh*pZLs&yj>*,|gEGB:Ddta-{');
define('NONCE_SALT',       'iT;u:4.Kv>G+{KL>l(|O>tn}[f;V2XxamYf_(6JW}rC!)8THEbpF5$.4!F8R<%az');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';