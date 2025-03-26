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
define( 'DB_NAME', 'e-store' );

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
define( 'AUTH_KEY',         '7y:ET!&K|dzZ9l4&]_n;2Y|Ou|B=0Y*dl`gU-uwfy%I)1._B5B{/2<n>cvr+7KT}' );
define( 'SECURE_AUTH_KEY',  'EjEQF)<4wfJms@5<v/TMpz6H+ IO&K;67m UcP4YHs%w`M{&3m=eQE/DIy]9C..5' );
define( 'LOGGED_IN_KEY',    'EoMXG?=G0B)(`jRidZ`9r!--P[I_45ErJmo.gHYXjBBFcQ{y3pu0}M,4NoNwwK(u' );
define( 'NONCE_KEY',        'y]dZEWFz5yr-fZI[T7@*9H3uh}z@}W6,^YFE<Y u97N/mL<AiTX;qw^0vv)A9EG[' );
define( 'AUTH_SALT',        'u2ep#B4y,N0Bq :hvgP[UIk2yU}Q@<e?bVg1J-(%Fgn;-kCz&ey!SUGRnKw<{kZ>' );
define( 'SECURE_AUTH_SALT', 'tvEdDtR]]WA:l]TJYoy2/]zmo+^-i][`j$[XdZ:]$<:BF7S%+Icw^fS>^41ZDw:N' );
define( 'LOGGED_IN_SALT',   'B%X*VX#*O2twF@?v[*m!z R,(G|e97#7`7f,$~:*L<:UX<_W^Sp(8&jS|dAZvf2#' );
define( 'NONCE_SALT',       'AgRx3:lL8/<@O[h)lwZ#3TABjbS$*(<cQe-fdD Kunmd)Imy}jrCCSQE&AU([>7y' );

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
