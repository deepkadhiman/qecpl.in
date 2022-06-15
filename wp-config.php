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
define( 'DB_NAME', 'arpit' );

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
define( 'AUTH_KEY',         '~?~<[lECw4;K[@t=Y%PoMx}:6{bW]v?ZKTiwg$3~Pso{&Sr^aR8B)cy_U^;otv8E' );
define( 'SECURE_AUTH_KEY',  'a5MDFK~1y(;nX|aTR~x+>EC8{V2gDn{]#(EIH&S(@o}]90`iOcPZ=q`.&82;;$uB' );
define( 'LOGGED_IN_KEY',    '0.:4p7|n5h-a,p#%Z+&JIcZ;RIN40hB<Zp1_l6!$!Aw6$MpFx!1y)FLmRU)j*IEW' );
define( 'NONCE_KEY',        'rgh2(nv`Rn(X wS)*/8r6a^H)tr9vM>Is@L&2sC;k_B#F}&4TT#y,2k9zf;Rw%Ao' );
define( 'AUTH_SALT',        'y=/~M`MZ~1gF3Q;S8#ACo9FoJSj5~{_+d-juMD`{8-gny|SZ>o2Uq52|@Dx-2?if' );
define( 'SECURE_AUTH_SALT', 'cj|?{ig.S:^ZSGr2q}Df;2rWIG.eVouaMd+L8=zBf*FH<nz_YGNxn*F$E%WRolaP' );
define( 'LOGGED_IN_SALT',   'C/}m|tM].^8=_xqB,WunY/$jD^J?d*Ypwa5JevA{shNx#GzTf7uqhkLGl8f2q>@r' );
define( 'NONCE_SALT',       'MZ:WgI[@=%pi&N>!,To`6-vKZMDAf4l0Y^9%N&]HL8N+`_+Jp- !8bw:)gi?0iHk' );

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
