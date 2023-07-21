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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '-<4oP>(BV{}_}7`Ndn,+KD:2 |owxlt@`M;s +L6$rDS3k]4cf!*fW/x`TDQw^,G' );
define( 'SECURE_AUTH_KEY',  'cs&z0YY%Gw1r,, yAlf#Eqv,,c]Ush,;&,4H(S3p8PTr)h.m5v%5f]JSC3..pl{ ' );
define( 'LOGGED_IN_KEY',    'KyNgb/y$g|LOa<.~rxZf^wEGUKQSVR-tB!jCOy!8pmFSw&y-decY=~ixD;PtfL6r' );
define( 'NONCE_KEY',        '}M{mfO fl=l5s9G+sx4KV(G)L&<S;b0B734u![TZD:7SaiDW [-CF?,1db+Cl)bV' );
define( 'AUTH_SALT',        'R/RS(K^UGm`?F$Tm]sN_T8Vqeogv0RMF>tj>J^UoKpc}k1&}1@;hm-AZxp,&^kT$' );
define( 'SECURE_AUTH_SALT', '$LAh*HIOR0PmBWqnPjLi?U~J:WL=*2ou.rUdn.ls/*e}Esw?]2DlbGP}UgWtN+,_' );
define( 'LOGGED_IN_SALT',   'aNC~#{RV&,|)cyhqyx=sKK<t?FL+FTr+JWA-lh!m8foa$Wz^>d;JD!mt^vV-Qy(-' );
define( 'NONCE_SALT',       'S[Hbq~UN`8S3g|Tk!dU$]3>{/^u^}6&Ovh6O ,bxpB(1e~!- f0|?Mht8%[1A($/' );

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
