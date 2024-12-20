<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sniper_wildman_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EE}Zh#e!IlqY*9jV.[GqT1.8Oz9paofpSLYP(O0*l$ZMkn5z4OOK`*0S*_?y.D):' );
define( 'SECURE_AUTH_KEY',  'Qpih,k2I&jL(Ms[!u]k?a|-<Ll=PLcy]5gR?23Qn<VbZF4YtR;CPgvu= kRPRQ?|' );
define( 'LOGGED_IN_KEY',    '.I7}C_KDlf|#/&y~X(*d/GJm#usr}>EpPo:AVFfnhnMtPOf.fZ#Op,p~FdccTemw' );
define( 'NONCE_KEY',        'P>Ql7&yZ%1k9:w!cXD8?i;Vz*9t{#zWX.X_s[23{{qRzNy>-az4nFDIm9qDYBc1.' );
define( 'AUTH_SALT',        '+=IB9Fh_vw! b<>YJ._Nq1qkEQrPW?3G ^6=.c@.A2sg8)ht9H[r=>(smPzis?s4' );
define( 'SECURE_AUTH_SALT', 'l2yj4hxhq>_<I3he,tRs_N1J+]N(JmXbjpY,*vuY&?yZe=IBA+I)+l#~_PVU@|il' );
define( 'LOGGED_IN_SALT',   'TdLY3p)H7-h![2vYR31]eV>.`,4J&{(.70]2Ba${l`:rFy#bNvF}|l1YiZl@^Som' );
define( 'NONCE_SALT',       '1PtGut&1+0r=Pqxt[MQ>%(wH;|G}=X#.e-%A!!BvOs3qcwibE<.-=sVfit:d(63#' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
