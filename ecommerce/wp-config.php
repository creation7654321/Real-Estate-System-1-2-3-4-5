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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'huKRxQ-Wa8+8xs,gM81?_%Gy6tS5$Z:2Qds>`WU<(~_T~D 7V6`FKLzb<O[O-l/&' );
define( 'SECURE_AUTH_KEY',  'oCt}!stm}a{%EF|ZDLu2v17zR:d;?s &tA27z>osGz]AMM=z?nTF0d/dK@D:w/IA' );
define( 'LOGGED_IN_KEY',    '7vJNwZZi;+1+~-.a8c:2K9iE4F$K.RM4ps(+lr! ~(Qy,A3K7,i 94^e$7*2{=<A' );
define( 'NONCE_KEY',        '[&M~Y=d6-K/)7vGz_ @zN;hIptW$Y4K+(=i!14EhC%e-d55bQ,@]A%2?~r-<u[bi' );
define( 'AUTH_SALT',        '@,=BYr[0X[mXDKgxS%J<9>YcBd<m^bpfJl?3m2Y-*dDv~*LDg/OOB)x=Ieh6Y4Lz' );
define( 'SECURE_AUTH_SALT', ':LG|9@vpU{DNxn!em}e/p[-ijQ:8 |$N&O7STf23=eM]Oc;dbTep6(gvrA=z8sMX' );
define( 'LOGGED_IN_SALT',   'qGnq{jn!Jp5~Zaqw|b4EJmicf;laW/$f!v/ <.UGsrD{NgUc8d5ud{]|T)_x_msF' );
define( 'NONCE_SALT',       'wBf$13{DX! _!,KnxUekwiLW%;QU<WgV[F5!LXLKgZx.U1P6knyh|=W6Z/ H-v;q' );

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
