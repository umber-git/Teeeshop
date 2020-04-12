<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'teeshop_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$:!74k%4^/Yv+B`|[Oy~/}#.p!L5t~6<FuKi;^p9w#B894_miC9 eFUIo_7n1x<-' );
define( 'SECURE_AUTH_KEY',  'Ei.HY<&;@<NEtD2Q]5Lx:~D <KAcMf9>Lm{74x?ncx+~ZH1,hiB2cZ*W9& @&P]p' );
define( 'LOGGED_IN_KEY',    'f>4iz^+k~k}X0LY;Pud~HdT:~>MV(M?Xo.5QZP/2~Ew$6Y1~}eodo=N`{N)|S<a_' );
define( 'NONCE_KEY',        'T=D7I%`-p F{PD7>l6?R/q76.}yYoHKYsDN(|K}p_3!mE6GbZM}4AV+^kq31ISaF' );
define( 'AUTH_SALT',        'itM,w.HcruAZiGxRy^,cNtH*PW)Dw1wK5ys?K}>=)2$F/8XC1#xRG%Kz1$[s!E@H' );
define( 'SECURE_AUTH_SALT', ':}bpqTJbN@02nxbf!b>CCt:n|U/S@/TZ,NRe,/<|2Us$D}vdn-4vU!r2N( K)l2<' );
define( 'LOGGED_IN_SALT',   'n$Y+a6>Iz^v!/KfQ4]Rt6KN~=IegDLmxFcNh&UFN<vJ+>vv;D:v@:y9v?7]#?+M`' );
define( 'NONCE_SALT',       'Iu1)Ds&gcCE1{K+jl[l#s;_.5Z^s+eGdc=`k8{CfV,f{=xp91=c$strmX2$@+q?V' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
