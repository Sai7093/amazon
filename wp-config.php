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
define( 'DB_NAME', 'wordpreess' );

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
define( 'AUTH_KEY',         '~b^dI%Hn&L+]>SUApA~FIh$lk{#6Vn~el0PyOk1n|ts23|Yej{pTEe+M`m=O7V.0' );
define( 'SECURE_AUTH_KEY',  'vYehNfj1;6STOou/>vb1|X98XcfJZUzD*h#*<&Fn1u4uhXN-4+tZqLxue: unMk-' );
define( 'LOGGED_IN_KEY',    'vbjmYW&.W:>P:C(<_{_QHbD*qlAo=(iW}niEl&xZM%07`-R?-wHhcP@LytGH3wR.' );
define( 'NONCE_KEY',        ':_@Y$;vg=Pg+vCAxk v2x*195UImi/i=96ia(S--IrWn^@fiIGKMDGeENiJpb!<w' );
define( 'AUTH_SALT',        '(svEqeW@t9myHn)#rAiTomI>ZB< :;L|>-8sc/<P*r%v|SCzt;8T{5R@YabIh%+n' );
define( 'SECURE_AUTH_SALT', '^dN0h{q&FQ+%QR<xM-a{$u}HE B=EZ+DZ$*VW[(1$&%>(0O@YfEEI#;@id23B>!~' );
define( 'LOGGED_IN_SALT',   'Fm)fUIMg4.HtR%JF[:6~EI;;<_NT(-L_ZwY{cScA,-1<DqW?.?s3)4DaRvL^-a},' );
define( 'NONCE_SALT',       'Tg,l[+5Tex@Qo~*mTP9$[F N:9:g}kRm:=oc`Rf3!()YT3yG}1g&<RLP+nsU|_> ' );

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
