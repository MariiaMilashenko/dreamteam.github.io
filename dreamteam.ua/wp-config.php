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
define( 'DB_NAME', 'oursite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'uG{*~A@.+skkR|a8W!(OX4&:1*ZgL=,p {O=Ky8!?wieT:zT$#+B0M.om/#oh/8s');
define('SECURE_AUTH_KEY',  'n[>ghS-<%8:WCY={AeHLkIv4F<Gyq6(R`Fk(vf]gsfE(.,!*XjoPd|/o{aN5tt;~');
define('LOGGED_IN_KEY',    '-b(=hpyT|_^B&|<Z-Rm6heTS)]`+A@XR_zv;:COM8^T_)a KoFIGc9nQ-^&bhiL(');
define('NONCE_KEY',        'dm5vA2SsO| JXul6,c1yVa/X*cSL@;uJlBj6_^(wA;ouTw(|-|~u@+ u6*M;Sqda');
define('AUTH_SALT',        '{X5-0Ew+V&0zzw1kSy]E$S|ZxJH-gO|{+yQ:bPgN/uc*s7k|Lj(T8wS[Nm]vINFY');
define('SECURE_AUTH_SALT', '4V7w+!3oENB:?^KiJKd^4nq5A5~[[3cxk;<-<s%{9bZOd/<>-VNE3)$`Z70EK2dT');
define('LOGGED_IN_SALT',   'nR}AKq|?$.b=a06]L|-?$psOy.0tGsFAXl-#MVP_Kjm/SbV>~+.[N;W;>JI[M4JX');
define('NONCE_SALT',       'Rv_I7gg?FO|bwT(X_Vp=P3pu<ma22tP]@)_8RK=&tnJP?xHzYZzg~`hj{ql;iP^t');

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
