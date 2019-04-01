<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hidrocar_data' );

/** MySQL database username */
define( 'DB_USER', 'hidrocar_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'C1rc4C0mb4t' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '=k!>Lp>`0l!QQ79;;XBCJ#Uv2 qt]/;/YOI-|8Z*p+Jr{5Cn[ESl.mUcjWufDQBm' );
define( 'SECURE_AUTH_KEY',  'Ae.-6=Pe#)@r{e}V^SD5j9PL3R]LY.ZvK$G2@P$&XyT8#M=oA2.jFv1jI3 hE<M4' );
define( 'LOGGED_IN_KEY',    'ekv{;7j1SP7Ruv,ZuMW54?}ZB Q>*_ba?[[vxy{]1c?8VJ~t N]z?Aw&$HsTj^Gj' );
define( 'NONCE_KEY',        ')E7);&z.pgx6+Y/<._I$1tf3EQf$)HYcGwDSkd12I6gkf}D&H!wl[[QBj~4Ddkao' );
define( 'AUTH_SALT',        'SpMB>K4wE<XdhRL5#K`s-s@]i;QTUHbVJ:<n)U=+k%jyB+GpKuVt5#<6tbH(>cVV' );
define( 'SECURE_AUTH_SALT', 'o?)9,OD=twq/Fxk9N=:~ls&lp>`5^2nD2cyW(AK`w}zN62$Y<,}HRD9Tvr#IEnrN' );
define( 'LOGGED_IN_SALT',   '6,w;Z58_E:): 0_<TC^@OK5.^a,?v|H+Pj|tsnD,lZRF~(9k9)g+ROyFCynUA@dG' );
define( 'NONCE_SALT',       'CU=zO^#Ny@|tt:]w_kiEpzz$tltc[%dPK!6GWm+vW74]!8N)%?+O@%Z>F/,NYCs3' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
