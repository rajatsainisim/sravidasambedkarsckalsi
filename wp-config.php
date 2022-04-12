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
define( 'DB_NAME', 'kalsi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'WHf*@8(v~bDGbewv}%PTK1cN=QT++5gSnN3P9D_ZZo&HfgxEle0v4!V(tlGSeb7V' );
define( 'SECURE_AUTH_KEY',  'rH%f23MN&ZB^rzW}={d<=G#s Ks7VH`!^]q*kuLr_r,]Y>.x:?s30@Sag 6d5.0{' );
define( 'LOGGED_IN_KEY',    '8b*uwwKu;=8jQ8VdBAx,:YXZirD.?P2$c3lQa46XK8|U>6S|EO.*/C_/SYNCC~M|' );
define( 'NONCE_KEY',        'AK;-Z<53)VHKp%:m@R*eV8057j[qg}v[;%xcCtqrvvb89x)@_-=,M@t,2tsIu% u' );
define( 'AUTH_SALT',        'ztwM-h_/MXqM2s(<C%=qX5ci64Azq5+,l4ef4~P9/|Lea(%h[x<Uy8Dx;q{G;dq&' );
define( 'SECURE_AUTH_SALT', 'w]2+#WMUHZdk)ZAs={;a3h$z`f>hTB@AC:vv(fKa+YP&Z3@ZSQNu?7<[*ja2#K>V' );
define( 'LOGGED_IN_SALT',   ',a#s8^3WuyE[8zhd[i5~{G|VeAGW}W:f2AKXIQx22]HM`J_i5 u@e=)x/#YcekIq' );
define( 'NONCE_SALT',       '>$Mmjr)]t>-&hC?Ey!5N8ixs_$md}l%e@0gdTO{?Y?uG!hR&^LQ@J=C<RVTr%Z#Z' );

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
