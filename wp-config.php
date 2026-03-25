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
define( 'DB_NAME', 'pg_website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '!QAZ@Kemal100' );

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
define( 'AUTH_KEY',         'b.;Zg@[{KWX&,v8~=4&SM~b(PU*lJl:hq!L-.5)Ky,c|b# 8*0=a2=7k)3jXg5{Y' );
define( 'SECURE_AUTH_KEY',  'INnOQNE+V?d[?JPU`[Mv]3Lws=ivPdS8-fUG~2M8#J[(T?Ix`}ll=8R`l[:7VuA?' );
define( 'LOGGED_IN_KEY',    's7ImWE3#JqDxoA[j+w=6foYEPjl|z$f5AWj*Ii4WV&D)x.1/N0sy,Zl9<Mx]BwET' );
define( 'NONCE_KEY',        'Vxd,8JZn(F2pR]]aq>G?OM?`x$x2gTJvkpIb({)<GJeAvWPOec:Dfkq&7,Pq)%N<' );
define( 'AUTH_SALT',        '26B@SKdn^1OQH[ Xz~2B]*_F_=DNun9)ATu*`$B**>q2(?)n4+DP&K=eD ,p.~MI' );
define( 'SECURE_AUTH_SALT', 'KKl->&EHi/msSOV?%QrkCu<_zXV?+Mp,;)Rci LYg.&oUqaqdzU8xRcm-yvSCyAj' );
define( 'LOGGED_IN_SALT',   'BXebwg5px;~l+d$eVnRW1-%?r)n?vyI|2dlU@ _O)u?BF!d4k6SatTVC(u6C!qE#' );
define( 'NONCE_SALT',       'LbAZ(q^W=UWYe|{-|$j0AQ_M.?c8e78Z3F9%H41QV/(W6c=[huC^w5B,;G)Ms1:h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'pg_';

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
