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
define( 'DB_NAME', 'byebyebedbugs_db' );

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
define( 'AUTH_KEY',         'a.iZeoPebFPA[MA76h*Ln5Fa$dq6%,0;VNUC.2=Swi:0CQ:q:=u^MUd4gO:.d=q.' );
define( 'SECURE_AUTH_KEY',  'UBXz*oM=fj /h#2b^3F$B/|tm)UYXFM0ka]JoC_pSAfIVMk&VwO=MwrJL&X.r!%e' );
define( 'LOGGED_IN_KEY',    'Q7Y*-n2L*@icS@oXT16{^E+AZr# F|1.nc Bc(B<9{/9n,inE%?nJO)teu%[g&@G' );
define( 'NONCE_KEY',        'eI=:3vz+Hi(@[-`A,U!>U/?[|W2c#zxx9r$4-r5#asa:S{COd6a+j~_Xh<N6wY:Z' );
define( 'AUTH_SALT',        'gv-qw[_z~,mEw>~HJ(sBJj_e0vUJn{6w(7fX).J%AP<1#rsfK$YLC/&E@y&bQ<-I' );
define( 'SECURE_AUTH_SALT', '5fH,+DbT3MHiD:vyphm3JK@~Hg!sQ{<qd6:>0H?`dXTV6Uf[~Q%v2.6{KkZiJ7m/' );
define( 'LOGGED_IN_SALT',   'JP7lo!S3B#!!jqkr@GYRM[ gAQ[%d^T@:ZZ[Qmg40rx&}T*?j%.&$UrfyAhX[3W0' );
define( 'NONCE_SALT',       'A*EaFlQ0F9je@+-xBuu#rUnG{!txc{768&RMv!vraEqFZmH c,(~;7b&Rf1:}:0$' );

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
