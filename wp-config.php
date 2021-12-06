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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressedata' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '`|e.45E73I7[Yi+ftu:Y_NMf9f_kM8p$$ RR&OFJ-)|T5pn/^ _tExg8437ZGOj&' );
define( 'SECURE_AUTH_KEY',  'B<y`<1Vxcd>h#i<pYHXA^8{u*Ka9%y7;^7J_+F29MN_x 8.bQIVzvwfn$Lch6b&w' );
define( 'LOGGED_IN_KEY',    'h5I*F/&xmt!;TF#e?>}p4O>&2QJr6]|vsG*/HaRYr2CBTvY2gI<g]=EIOvcV,^IH' );
define( 'NONCE_KEY',        'XS];~brkHX-O.Y9b]G?:tr~=3E|WI?N<M+ig`iygGu5!4U@f*bo~3:$w:`P8$1&Q' );
define( 'AUTH_SALT',        'as=>h8*ix!K_%gZ]_-t8(J.1/_f)8z5(91g&IH;sq2c-=(wV:AZ_.,7jTYY8VZ%[' );
define( 'SECURE_AUTH_SALT', '/#Lp2ARvz6KT4TNZz4c2(70_?FJxX4G%E@].nN)Ne%D;$)5#-0:x&4Vb;L4XZSUi' );
define( 'LOGGED_IN_SALT',   'QH<We&Y]L9J9Qs]hC|dQ5?Cz|-jbY|9+zpgY:_7NzX<S~+yhf*y.|^lP7(EJxLFX' );
define( 'NONCE_SALT',       'yOeP%*N@X+|]pE)KH_+A!0VuM85n#I5l]0@gT;0i[*[6#zT84}o(p4=vWq34U%oc' );

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
