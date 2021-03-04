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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define('AUTH_KEY',         'BHiSS~K-6Z$IdpqN3>eR2ho4s_ln`yY8]^S K]WhQ2 SVU-?RwFu{,vA?c8&WFZD');
define('SECURE_AUTH_KEY',  '{3 ;e%r$[?zRN@Hgqwgnu$qft+zbZdKx_4F*+|o%n}(R9r}&Fwe;lmh^N~o{5P#5');
define('LOGGED_IN_KEY',    'Ty|G%>7?FRDX~q(LF@8Q}mAXu~g4t$c2)pnxlsxXLXt.H`> Z5T+ePIz$k6_j#zu');
define('NONCE_KEY',        '/Gzw,fiQm|#mkT? dae-<aFHOK$5)xV[dus[ S_T9,>eEq[K<0,jdyjoeIJI-].S');
define('AUTH_SALT',        '/1 -G+__AP/s^ W k$qCr2v!9-N@2]?L:pfP/q1.ctuoExE/e5MjaZLCsbo,mTGp');
define('SECURE_AUTH_SALT', 'w{jfG-#[~)O}wh9&6:!4!R6rw]o@u%qgS~(z->drk[bL~hB~TkyjCNJB5L&IQZvW');
define('LOGGED_IN_SALT',   'GaA?MsgJcGN?WC*$?Bx]X]|`qr|LRs<yEtg}Q}H(vOPUjW?lYy&<R>@2+NA?eigF');
define('NONCE_SALT',       '?#:Dv|?:ck==1/twAf,k|NR#y-M(b%5IM025]57CSNm?8Tg)C>v<g]@&WDt(_XI1');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
