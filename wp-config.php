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
define( 'DB_NAME', 'knx' );

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
define( 'AUTH_KEY',         'F$UN_J97Op**hOE 3<ZVW)RO:DxmS8F(q@%-k3cuMxM l=)-,+.(33 a R6z;hS/' );
define( 'SECURE_AUTH_KEY',  '36ZL%GGE.-)12Kv;uJcKW97Rwz_/%h!?KE&-L3X41vz-e~*EBKuZV5 _p)yK8-wO' );
define( 'LOGGED_IN_KEY',    'J>U6Oh *H+Kc9g<0S}%Yp&q}YB48|SsDj//|OBV[xk1cyu%[%j8-N?!YA@+6mKQX' );
define( 'NONCE_KEY',        'plaPpS!MjxBOvt 43 0z3@H 4%:iL{%->iA9mEuc{hxI <i*3=a{Ly`;j:(E{Dzt' );
define( 'AUTH_SALT',        'H+BAXWl^D!zG1v,o/RT_l9CD9/;WWW<7OZ~3>_-su.qiv`=) UnjP{:4(Oh18~L@' );
define( 'SECURE_AUTH_SALT', '|M`nJ?t{)&qs6I-h1T/y;_.}lP6(Dy0I Q~K5+$a1FF:cq#]Az;E,t`Eaq_Yj9gC' );
define( 'LOGGED_IN_SALT',   'N2X0x<R5`*Vk1R]<0]U[s {ml5 ]pSea^A]eD;a=6&s/)8.g7-?;Ub%uX_ADXg4T' );
define( 'NONCE_SALT',       ';PN7%{T+,0xG)Zr!0y+=I1~_qWN ]NE$bII8O_~p9@PIv RhAO-|l DfIR.zGZqp' );

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
