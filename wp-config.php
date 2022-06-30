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
define( 'DB_NAME', 'wordpress_syntactics' );

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
define( 'AUTH_KEY',         'XYy`Fs3}:`]`i)TtGyi,V4Y}6b_V+e`|<iL4G6,bvq_j%yN@O&fl?/i3iPgp[=:#' );
define( 'SECURE_AUTH_KEY',  'f+g`4AF)mlsVL!uLy^8^9L@wbe_NX5bi<sd_yq[z|*w8y$!F>%!g1S<)3lEh*mEx' );
define( 'LOGGED_IN_KEY',    'SG=HLNuuGBsz(}$[p)Vg{5HLCWNfqi,%#=`*l?n|$/)nX=aWKcaj7KE7bPo3JOIs' );
define( 'NONCE_KEY',        'f:8SCo&Q;7CQXFBddo7I-kdB?C#<[1osx<<wF-l]b;%k`~+iN&aRU6i|3v%~/7H]' );
define( 'AUTH_SALT',        'q>D:*U6lU;u*T:@b`$17/+!O)Yr227Pc>2rgQo/:~PO$93]znj<@>eeLO+~9L7hK' );
define( 'SECURE_AUTH_SALT', 'VoslC_3QtQn#uXX8Zsy9A1CI(2WD5PNwE9c,$K^P*.EDh[V(LB%aD]Q](:hS077M' );
define( 'LOGGED_IN_SALT',   '0P7twx_DjN@*CJI~SnprX-YmQQ=8<ZdORDN(B;?({5eU+=q.hW$r`nZ.;m&L<Z|1' );
define( 'NONCE_SALT',       '*41_2YYHPfTI=2sm)G!%`ybds,;U>k%0jke!Kqk+o.=N%vKyl0*gnQ?EXNp,#E5]' );

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
