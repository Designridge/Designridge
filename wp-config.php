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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         '9fJxm&<DiX9wr5@EbpBk&TXO6w~&vz]K08%dJcCBSpkFYjfmg@I)WEJqNDRs`64?' );
define( 'SECURE_AUTH_KEY',  '(C/h2w0U_$1kdtfDEGw`{LOoapw7M^+<lV1Aso _k@@A#(0o-Z&41,yb_ihVAPsK' );
define( 'LOGGED_IN_KEY',    'GjTW!dhN)J2axdDE-[,cd0M]7t!D>9{@FP@POs8DJ.qXOZ?H%2hn`;]?G8%MO)o9' );
define( 'NONCE_KEY',        'WIMYDwm})<Ix_gJf)YGq8SU4k[ruM9mdP%10+AV*{k46A*L_|imqcPN$N4jmk{Xz' );
define( 'AUTH_SALT',        'T#VV#0&%4z=n-L@O(r|8c;cj=}2NH{lB$W6Vs<^(%ss_)UF]%(Esc@~S8%1NT&@Q' );
define( 'SECURE_AUTH_SALT', '5`O>2 };Kfx8,*W!0L?S7S!T^x.D@[FBRr.j1:6kl*6i|$@bzcr<f0}@*^D?`U;S' );
define( 'LOGGED_IN_SALT',   ':@1JmIDdf~~O_jCImGN)VeEYzNoAdq%!P8EA!:Bg90K{mw1{(eebMxO^c=-J1x%m' );
define( 'NONCE_SALT',       'V9-<])(&{^F$V`d#]s p/?N}R|O&JpC>-pZsHF+>8>Yt>8+fswuh+CdK5g].L_Oi' );

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
