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
define( 'DB_NAME', 'shreya' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'R=vlGs+*3y(D)M*k_9H$augh@pg<*Kj-WOECO^k6QRKdDo~|0#sam?-~V&on@fWx' );
define( 'SECURE_AUTH_KEY',  'e;XHUv%oe@`{e c@Gr-G)dj%asnw=@D4Rgv0q;mQf@c&3i%?8T3d:)YeV7]<?erN' );
define( 'LOGGED_IN_KEY',    'WTy~!*aZ*>zm{`6JCY6*u~e:E)YJv+m(.n|lg=J>%4b2_M3Mz[PE1%e<my<]C`K#' );
define( 'NONCE_KEY',        'u6&^XC=gl]U0R?e 0!6uwX*Bg@[|o{seBvxck@6O(l/O<3B0R .?2=MG7/|=?{Kl' );
define( 'AUTH_SALT',        '%h|/`VxU;+q6#5YE5^,jRfU}[PvG,/$0Vgd2Wm4 vS?d]{rlN+:D@&0`ZO43c?fx' );
define( 'SECURE_AUTH_SALT', '&Ie<@~d&=V }GoF/IWy9-tYsF#1 Oo^[=RaPRcKk3nk% VWeuPskBpY`p(<@l`fh' );
define( 'LOGGED_IN_SALT',   '( y4G}(/=t085}@#<uwr)o2Ut1ER@DLHPoa<rob8d_y9v`#o?&QW&H)K,!;}7HCx' );
define( 'NONCE_SALT',       '&<;d8kL/reD[PX0-eH:~*5:e6S-.vtubmOz%7buUrwcuZ=8(kD__S~-;t~AgE|S$' );

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
