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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thegamingwebsite' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '8(h14~JF]QH[mff)Gzb~?wN{ lmJqWwvPgP,Y4m] }V(a?6vW0@,?;TdN;V!F:gO' );
define( 'SECURE_AUTH_KEY',  'qnSTLO $Cd1uQA6Xlu|gAD=Whc.}UWemxbK~wCa@Mc|}~BseV6@6aX5v9o^,i;X_' );
define( 'LOGGED_IN_KEY',    '8oE>/bZ+%wC|%gaD*mkJKxfwNB8HVl@l[x5Xulpqe@!k+@O$`VOqZ&KaQ?JKf)7r' );
define( 'NONCE_KEY',        'RjlJWs$mh>=5*7st9n}=_WQzm!kxg9*v|@ymnt]ubV?`&>K+ncKk5{d#|b/+*cut' );
define( 'AUTH_SALT',        '&s(ol-`p%46g$w[/e`>}Y6sN5(y&QY@F@gYHwUVnwTjlVZ1wokiK:[8HvsrwKu)U' );
define( 'SECURE_AUTH_SALT', 'K(NT`MM,QIj-eSCjqItg||8j]#%D7=>l|NsVzTp:VM:-)ZLB3F}Dda;-L}fZt(da' );
define( 'LOGGED_IN_SALT',   'Y&m[DnZ$6P#X1c%q!{Ao:xo=[M]Wj#)U[`n<@!Nrg6Y&B[dU*v5V@89>:`o%J4p.' );
define( 'NONCE_SALT',       '!znbXrjF;K4DvOW{etqRv&8w[FplI2Ovt{cd|mwL3(D^p|8j{q -h7f_W&YEopvG' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
