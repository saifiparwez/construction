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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cons' );

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
define( 'AUTH_KEY',         '4p>@NIT^+ZK6ri/;c<(GG_+:op;*,oyjM8~8GmKU]$a7ozO.5m9k/rv(lc) aUb<' );
define( 'SECURE_AUTH_KEY',  'Elt^_^Ihp.cX[Iy@S0bK6CUN(fBq]b$K_%q2:bBuedn ,3W&riI@TPqEL8$yU]{%' );
define( 'LOGGED_IN_KEY',    '6h_c*<XwL8,rx5[54-1-!_{bAlf5zF!CT6Nh&~SjZH.eOwAOgnRwr%}_baeidtq0' );
define( 'NONCE_KEY',        'o5;T?.9BF@c`qm[h;VBTXQ4.f8|0Sxf?}mUN_*l>n8aP0~01!(79J10A[2~(VG|0' );
define( 'AUTH_SALT',        'k0j( 98*J_db0eIVG|cE&i)v!,U]ilnzoc~),N+ui9|Q6wZWl|[QJe~u-U:Mf`<D' );
define( 'SECURE_AUTH_SALT', '-D_lrcy@>Syx5GwIdklW><+jWt&?@E*k|/j,XP+GUGa`8RM-|P~[Rcxd1Tq $;)#' );
define( 'LOGGED_IN_SALT',   '2=nv%u`2139y=bUZ^UPP{ieoO5;#]vp#~yl9A$?bb{V.X(+J*Iir{~$NfRshm g~' );
define( 'NONCE_SALT',       '5C+(A&nj<eUaP=Y wf]T:M/ XNpJDxxS)Eh%*<%i%OEV{~FTN/Oi8qg+3|LsP0mj' );

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
