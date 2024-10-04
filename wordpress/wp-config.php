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
define( 'DB_NAME', 'wordpress_2' );

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
define( 'AUTH_KEY',         'wl;ZK-2lLcm,^%A>rL3l>[I&EvnS#f[#D,{8]u2r$Z&Bt[DHy8msa[j$?B@:fkDX' );
define( 'SECURE_AUTH_KEY',  'EXIc,T}i:p,{>D$Y#hD<r?:,>9h]/}Din!lb}8zpiwYei`AXV9o_i$!%Y3|APxF/' );
define( 'LOGGED_IN_KEY',    '.EPO4=->xS>B=uUZ}7VsR=,_F{A !ps(@SZX/s{cRX$9[Vo{`2I] TPV{.q;0Ws]' );
define( 'NONCE_KEY',        'Rk~* Qm+.Vr<ALPpyg.EEra-Iu%K2Sygppd6>0A20kg0C~8yvH.=`d&jy by,8fr' );
define( 'AUTH_SALT',        'xvd]IHq8)F_h |pAyv)v_+K,MPj##wz17 9.<5Yj)yURzl+a;LG$N)T+[()(hM)h' );
define( 'SECURE_AUTH_SALT', 'T3]LE3_kw,zl~-X+:_<B=1/46#ZM-&4diz|1f$S[+c:7[zzysLjRB]AUdPznTlJ7' );
define( 'LOGGED_IN_SALT',   'dx*{[m,SGKxSj>JSMk$}HpEjqJfw-%=_9NUUA:Ez85%GW`^6=Lqzi2Hd-T8fO_UR' );
define( 'NONCE_SALT',       'J$CV%k `Cx?WBK3lx4@hn+ lTkJC>`wsU%O!;^)nv-4Gn&/nky#hBCPy@c0+m0rX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cms';

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
