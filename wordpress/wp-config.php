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
define( 'DB_NAME', 'wordpressv_361' );

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
define( 'AUTH_KEY',         'S2}|bLaq@{_^!dHh&B0QPt_g`8w~$8h<w>/#iMUvf&&mMKMmPa3XL]h/;f=tYd,D' );
define( 'SECURE_AUTH_KEY',  'aIokPB;6#X_ &wZLt h[g3jxNXgZD|{+4Z?8oa>d9a~d];>HGPV3_R^dm* }9NL(' );
define( 'LOGGED_IN_KEY',    'N9*D~-yF`v.Jo(iic^(7owK(f4VM|WEU^Wj4R?.+$]hLYaZ;boI5dG$#gfoI<LPI' );
define( 'NONCE_KEY',        'do]<>V+=4&_R]#aWeTA*60.t{uKQqoCn*.$ig]7Y6-.Ly6NT23~Cjc<S^(6YH[|1' );
define( 'AUTH_SALT',        'Ax4&V=o-:v *jHKWO8l?g3u :vURR8,A#=?`m9!-Z,g} .`!D2]KNVC=YV-qGF1X' );
define( 'SECURE_AUTH_SALT', 'Bop?_RM7Qr8U9?3JkL>_P06C6&8/XmcA MnrjObO[iypplU=->}2g#0_2Pd$s!C!' );
define( 'LOGGED_IN_SALT',   '?ApA52z Q/Z6,E (8KNPeM1Igy}dZ%^=*m#>Jnh!i#uetr(y8gZQ0%%4^/k ,2- ' );
define( 'NONCE_SALT',       '9Tpo^!B.{&Qy-o`LhB#A|x]L8:S=6kad~:UH^:qhb;YFL2e=6Oj-+qoo`7V+,H$^' );

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
