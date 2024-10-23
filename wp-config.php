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
define( 'DB_NAME', 'kochanek_wp' );

/** Database username */
define( 'DB_USER', 'kochanek_wp' );

/** Database password */
define( 'DB_PASSWORD', 'Kochy24!' );

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
define( 'AUTH_KEY',         '}zYQXob{9z/jUw2oDN_+cWq]AW=3<^+Is>;v7?}!pSw*h1lCku@r~rWg){qFDCZ6' );
define( 'SECURE_AUTH_KEY',  '8Xd{8sJZb!L):,MVX 5<h+`NpW2:0tsa$Mu~3k5)UdOfPeL@?T%,u8Cxq7K(;?5D' );
define( 'LOGGED_IN_KEY',    'x}XqES0m80p6[j7N|W(Di|QWbg({Q>b#iPv0LW*1{|zbeDU9}BDs@zdqsXTm117[' );
define( 'NONCE_KEY',        '!B5oBuBrXjVm!5ESghBDoo}U?h$?Np^OwlL[{kTcKh)>bW[^<qE08m|dP$, ccNd' );
define( 'AUTH_SALT',        '!Yz~-nJ+&^{wl[6|Xs,+;w,tPN a5q1dnvdPW|]e|2,Ap7{l!-7*[b52^sGn!GGD' );
define( 'SECURE_AUTH_SALT', 'QC(GsDN,nskANxt&^XdF[Y$*L*{(qe[=kWBp2:o)CPNt-HMu8FZ7T)3z7!*v0{-K' );
define( 'LOGGED_IN_SALT',   '-`?=}I^20to*D7cebp-4Lq9b.grK{0:3$L6/b/px33j$EKj>#oejw(noIR3lH_Gb' );
define( 'NONCE_SALT',       '}9{,sKsC_,pcMYI]8V]ZE+NdXS|o&<Zm[u(>W$EfR$|ySc/3pn`XD}Y[O<zz)?oZ' );

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
