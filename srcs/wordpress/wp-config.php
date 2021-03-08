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
define('AUTH_KEY',         '+t*T)y2]J-#ZI14i%*BUWB(R@S#(4F+&U/lCg0(s9XnF)CC>:(h+L6P?-j_{iLU=');
define('SECURE_AUTH_KEY',  'j-N+eO6Tae-J|KlaRvEgu7K&^fPxEd<Q-b-6hDPv=BBFk+l+bf:u#/0s;WE3/tG*');
define('LOGGED_IN_KEY',    '{~N/i+2&YhbCO>ARkYq2j1!!{<&4Rb/h8|Rz7Z!`__{#HQ5(S#[q_/IG[,K:#RH0');
define('NONCE_KEY',        'oASpN]/@6, Ce&T_,H4i:y?8lpqOvKMi|N@@m`9qWziLzb&^Zf.wROn6V3AbxC7A');
define('AUTH_SALT',        'pF@lP%0q/MM}>W]|;P%5?G9=< QA)wPBkO%{e!49dgQH)WfK1+yD(+-whd^ICl0I');
define('SECURE_AUTH_SALT', '?4QEJP/1|+&V<z<huQaZp[!}-,$HJ,}1E+@S)Wa0>Awa^SbXJ?F4{v-,+wD%wb[J');
define('LOGGED_IN_SALT',   '+pB/cce?t:/|B:Be8,X1QKxQ?->Q+W~oUu0UZkea63ep.JbzMtn@@,>Z=z>wd*IY');
define('NONCE_SALT',       'AG;danuX|1;$Axh!13(`{Q.HF@KSb6e@G:!S6X(_exy_~UOgwb$K1|lhi|Yk9X)W');

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