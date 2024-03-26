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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '^=E$x(7xN+?qc%:Tvb`h?`DYYnfYs~|_r&eBja!,,dF%N|>9]9|M5nyx=L9f[8*b' );
define( 'SECURE_AUTH_KEY',  '|GY)b:Ji&B:!iHDmwrR$ d[]&[BACt 04zDNnWEEf1F_jUQ`kd!DF>C9SG<S8%xM' );
define( 'LOGGED_IN_KEY',    'g0<K@@[9~;9K!^X^JP=w=: +hMYwE$u$QWO0G9{<l*)=Ffw$p6NR5H@y$vu0HwdN' );
define( 'NONCE_KEY',        'c=f#bI[A=fA|B9k/$ECtbz eLOD2s/vIvu}]}GQC|i?X=De,vAcy?tWV9{UEE{rR' );
define( 'AUTH_SALT',        '+Ct[6D{9AlzY!xc[?!mjg <vi}+<L6U[%va-#EQ[LL,ZB.BG7BC.L&d*PsV8T/:*' );
define( 'SECURE_AUTH_SALT', 'kYt`O,xZU_Oa~Q6a-v78/X9tyX:e4N~^h8YaxA@9r|lXmh>I1k=:92${PnDKuyZL' );
define( 'LOGGED_IN_SALT',   ';^hPS$l6x%NR,oD45y/Qsd!$f5aB#T:l&Qq@;58C~gyLNa=lrDz/u[_h/[QW|.:D' );
define( 'NONCE_SALT',       'ie@eN+#6Exik;EqE(cfpS@ 9/<YM/<<)1?BBCq&gEj5Rj4h;eV%^FJ.e3Y!uX9TZ' );

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
