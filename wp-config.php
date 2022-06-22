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
define( 'DB_NAME', 'redtransportation' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'xH)VH3~^%L>u*(/N|^ iCcQpzs!q^AF|Yh0+ut?&=%,iQd8X}5]=NP%t>}*i(h: ' );
define( 'SECURE_AUTH_KEY',  'qbJH;@Uqw^D~w>9  v}:*|A#5KO#>lK@KVREo^1aD]yn4eu%$#+@F`<Ydj&m6XeZ' );
define( 'LOGGED_IN_KEY',    '=93^jN7)m0l0S}`Up>$|rRvXr* `Ew}pzo[Ie}q+<)p3TcpUyT;Z.eR3TLA5UMJF' );
define( 'NONCE_KEY',        'eaxWDdTq[D^_GL @Q?Z=0katO97zHnFeecKXrRz]>v`iGrNi0d8qC3c) T67)t=[' );
define( 'AUTH_SALT',        'ztn<&bfEVT~)QO!c+Ii1cf P*@/@|*{ZM{;Ivuvcx:Vl2GN.I]GoV.SxvmV#E|Q7' );
define( 'SECURE_AUTH_SALT', 'X@W9 4k?uWOwx1IeJ~#RJ%N%miCvS4E?j,DYm_$B=j!/LJRk,:NgKw.kcPh#0C+R' );
define( 'LOGGED_IN_SALT',   '[D=F6A=?@`tE*|.NiNms~FbOUR21FNzw]l]OXDA>#34y5>[![nfF?A]]j@>;r~aT' );
define( 'NONCE_SALT',       'WD#ef&jj@)w]K(o:@AK~{&:NXv7wd%WBwxsR]pl&g//PkMd7x!-~IX,8>s{i,dW/' );

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
