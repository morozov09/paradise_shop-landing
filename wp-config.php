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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/u1980325/data/www/paradise-samara.ru/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'u1980325_wp409' );

/** Database username */
define( 'DB_USER', 'u1980325_wp409' );

/** Database password */
define( 'DB_PASSWORD', 'Y(94SB(49p' );

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
define( 'AUTH_KEY',         'a4btnssfil2fzdkeeujmak8ebvldld71iyfc3djsramwdsdvgj63hxob0tasvaq9' );
define( 'SECURE_AUTH_KEY',  'lph1ztc0lsg8brmyft6ho6ova70ejek1u8fhni0hritxtbisqzio0w64ycvt2cmb' );
define( 'LOGGED_IN_KEY',    '9g4mxz9cxazwoxqomtqlrymq7qhdbmsidsypovjzjx2vp4vlulenus8xj1u7lnpw' );
define( 'NONCE_KEY',        'cw3wajepotosaxczskmef0hb5xz4kaxxsqsr3kxr3f7u85zk5xiwi9rp9jvre724' );
define( 'AUTH_SALT',        'wboz62dhwac5wlmhxgoorwjw0dgknqj4nqzwn8gn7podlrmaodzcfejqnfsrnf5m' );
define( 'SECURE_AUTH_SALT', 'cey6dtafc2wctfm7ytaipsk8mrn1westtkzs0ydeppfl2j7ioxblqp4dgubknt5v' );
define( 'LOGGED_IN_SALT',   '974ztkkmiscnoiitfo9ebsi8ox5ijiua8ofvm3y76iicc6jtlyk4pdoujpn9e4s2' );
define( 'NONCE_SALT',       's3qullbwj2btklmmwbkpvjtlvkuwi8rktmodvbyx5ypvasj8mm0qeiypc7drso9u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpro_';

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
