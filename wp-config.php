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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_yessica' );

/** MySQL database username */
define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );

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
define( 'AUTH_KEY',         'sj=&?=ajITsjVe1HmDu{2@rI51iuo:?_{u;=cKb/f{=atm_ef%Zst{7 #/sFP1B>' );
define( 'SECURE_AUTH_KEY',  'zn~;m ak=?_dHg7=vC?qyOv8q5Eb[R+Y8K6Wt9|0`2phAE=1zb{@1/:b& foktMm' );
define( 'LOGGED_IN_KEY',    'X:rKJ=<g]6}jGJ6MjAN:!z5/vdf7*h5Aqd)aHK`%b10gWUc%6yIDfpv-8m>jD+=Z' );
define( 'NONCE_KEY',        'hz<o`a69q{Y<7M67laSpx&*B6^Ek6~@#r4/xR(p|/*lka5.:&5u9q8o4Dx>,VaE?' );
define( 'AUTH_SALT',        'IqWu(XLnGLgH9pd,8w6{yH}&&]2Z^XihO37X2UO%IgROrb69Mld67gw7FF<yFG+J' );
define( 'SECURE_AUTH_SALT', '-%Az>-{d%#~U2_sOX6XGgoZg&3{J4WA?co:$Z*QlHydjPr?k7h$Bd`47l$%wjGtW' );
define( 'LOGGED_IN_SALT',   '7{*|3A`glW5M.M<Y#GpefnIOk3+N:jD[E])BvHxkvUkfu?i g}b56xZy!W WR/9M' );
define( 'NONCE_SALT',       '#}Rfb:r1]~b7ZQ~8AknQkm#,@C,Vmf2>yngDxd$`rgsV5%] L:AKV.$M>QC>M=$v' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD', 'direct');
