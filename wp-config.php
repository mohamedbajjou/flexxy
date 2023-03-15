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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flexxy_db' );

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
define( 'AUTH_KEY',         'h-A[<~bj]Ca8n7{JFouq[Vf}VT._iP1cQy,y5;/1VtrNG_`G{%X(nl2SaYa{PM8*' );
define( 'SECURE_AUTH_KEY',  '3H4(TD*Dl:W]F[[QlsiI]:Y+k];3E)P=)*V<ym?dKXVsuynZ%c.  k>13,He}e0,' );
define( 'LOGGED_IN_KEY',    'V$];I*u^@;UAD*f;%Qw$hqWgx QW}xJH.zN+@`K:^y=lU/(qK|G 6.Ak W_SaV!*' );
define( 'NONCE_KEY',        'J^Qme7J0;a1Xke/~Qiv}TbCpb(u&n<I`{lxL/~Oi-5z(]EG:vTr?CbN)]XT[x9TZ' );
define( 'AUTH_SALT',        '4T{E!2cQ_ey)i5xt3)9rC&n%Db-:M0c[X*CnN.]x|)p@jR9C1~:~.e{b=xhU_c7l' );
define( 'SECURE_AUTH_SALT', 'D.mvfH.DtK4;{9F^I;(2h?GoKRp{F:ljXY_O!X3HI/-}P[I 3{}3z?NU`J1L]H&$' );
define( 'LOGGED_IN_SALT',   'sW2tD0A-RpM_g(_)[](Odj9Tg{ZaIcUh?Cll.or31T4anz.r%,9, 2A(*D45/y!F' );
define( 'NONCE_SALT',       'F8zjTTLI1_q{ljiOu$3cNF/Zl$%4RBolXAn;hEu,?s/0UuPLN(-mIrHeOb**?OM7' );

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
