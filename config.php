<?php


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', getenv('DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'gi^$:P,ZM#kK8|+b+J-:s/o8ZPPAs%8c}2CzBEi:!p{xS5G)?Pu{-~Wf=I,kL<@^');
define('SECURE_AUTH_KEY',  'SRj<botCY{ M|gJ|I,NXLrlo!+%B|&!8P7s-4T-u=dC+VzbZP~mOJ.pdc@Kb%3)|');
define('LOGGED_IN_KEY',    'q%NXC ZsJ@BIV:_4g$r<sA(a7SlJmKd39q )4RvFa,8UQ1z1LEPX]CTL|?[EEfIi');
define('NONCE_KEY',        'W7R>DwUw//Ax#EvElX!Z315U2t<Cln=koo|5QzTsDRQ2kSBF CW;u[}0eth{,F/]');
define('AUTH_SALT',        '34n&2T ZAa8C2g&!o#0+Y_v/A1rvoGA5i0R ]ar@)GMC>.KP~HSREd-fb4yzBz[d');
define('SECURE_AUTH_SALT', 'Y@-EQc==1L2{tc,DT)e0=$6gcOt38WL~kWb1gz*&QGkF`X~uG2?>6`%=g,s</?|$');
define('LOGGED_IN_SALT',   'dYnF#Cw#,8hf,C*Y&8!oWMFKoW-}s!8HcC90>Sy$BLL?W46&WI[q8!WA?c<J.=Ao');
define('NONCE_SALT',       '-ug$rQFIKup#v(|!A^-(j>r@%<<d{FjC2|O4./-+udFq[H;CQJL&Uv e+1.$Kd-t');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
