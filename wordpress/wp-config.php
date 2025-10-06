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
define( 'AUTH_KEY',         '.4nV}T2Y^L syR:gqM,qpD$fh*Ok&<QrJ9<)pn~boI.>nTb])V4ckN/6+$pv{-6M' );
define( 'SECURE_AUTH_KEY',  '63N4:/%a|-G,Jy9z$$Ym(BD,*nCV/bdRW4w$r,gRJL3D?6j(~M=<b*ax-Z>}%ivQ' );
define( 'LOGGED_IN_KEY',    '45%/%MvS3M<V9M9aV0}f*1]h&-K^ZH<;ilqJ0=K+,Xd65Ln`kyof2[hw~(MLp3Lk' );
define( 'NONCE_KEY',        ':;Ul+s wSM:{GRm:4b9{*NwmqFGRzBFQS8on;6F9PEws$ch#vSo0rEt_+4t~La%y' );
define( 'AUTH_SALT',        'I3Ci&PZy8K[0:Z})esg)fimviX-Hr*Bi;k)}G/[zzPi6s,@I{JxotPpar6p_=fSD' );
define( 'SECURE_AUTH_SALT', '~RL[_Dy!NH zxwd?d @_1~e;+,s6xSvuB2q(z+ip?9_oymg}Q4mb1k7dWsT=Uci?' );
define( 'LOGGED_IN_SALT',   'aRWpaV%*bCxi8[*Y2X-LkTGd=W,B#[vivoY>8b::mmNQ1.aK{%/p+}[ 4#.KWk0A' );
define( 'NONCE_SALT',       'x->$L~-ln5TdUvaScI)az@L?!m5sZOzR@(.$gOEb-KECC,9*!Q)db],~7)xk*a?p' );

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
