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
define( 'DB_NAME', 'winnipooh' );

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
define( 'AUTH_KEY',         'rV:D >z_R;LTdn=_JkE9ku#*yt} RUp+!t!&JAb=DlJFj2voiqU7_zB?Gnt!MCwl' );
define( 'SECURE_AUTH_KEY',  '3O4MaFzOBqwU8Pde#{6,u>^00,}gUQG6[BEzd?,]!.7+:Tf.rwU;9{Q)I9m_c_:N' );
define( 'LOGGED_IN_KEY',    'RBp%Z1@HAbtO`44Emf1F%;J l{KAU3OjGL}]9!seRKm#s-cvm/9%G6u!A`b`1tdz' );
define( 'NONCE_KEY',        'E gWG&k$oxk>VM:~n{`BIyV/pl2-%TDLp-(/}R#k$#/<1eI{|l;D<x?ZTY-6)Cb[' );
define( 'AUTH_SALT',        'yV,T9gNn6wu$B-PPGoF#BsQ`k^sN^= ,^41B}7E l!|j?^%kfcZqxCKU]<@sx4)S' );
define( 'SECURE_AUTH_SALT', '}1p~tc4|Wv|JM}%os^./]VHLYp$:*;h#<`$vvHuC G?v=r VXvL?@N2) kO4vv>2' );
define( 'LOGGED_IN_SALT',   'Wk^Dxu}5#Zu<PUzs6xRe$N54vK^z,^Tbs4lM5~Kb8C`[/xW:KHKB3 &A9?|#L;Yv' );
define( 'NONCE_SALT',       '.PKUQ.4<@<Dn$eCJG3X98vP+aFR$`NA)h]ZvQ?-.?PvMdWp&.WLWQOF|J2HBl1&K' );

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
