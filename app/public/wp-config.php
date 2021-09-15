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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '73+mYtS4CDAOQikX6ZceCh7LMTroRsSIKO0ipB4WPJt5NIBgIGw3pIf+9nYA4iZmtMjLTUFoh0XlSqVkQheK0g==');
define('SECURE_AUTH_KEY',  'VJglOq0fQbdxnf2nWrh1+vb2Ozo0jZc67MzRreBcyLWgd9vWydOy27l5yt5fdjTJj1AabiCsKYKcZyoXDBtDGA==');
define('LOGGED_IN_KEY',    '4ju/LAO1Oy/USTg0KODvl7uCnLLA0pBunQtpAcXcVVvjLA0p8zfV4I2NIjLfhDONFSO+zCiFEc2JszetUlJQcw==');
define('NONCE_KEY',        '/C8NgoD4UrxDaRWnONX5OwUwCUrHpwcHKZEwkXmX1QLPDUc/qtmNPqJp10gt+MeYj3V+ZpXT6TfzH+QopHYajQ==');
define('AUTH_SALT',        'VqosyDJATlI+bNWCkxXAvs13qQ5jQuhL7Xtq6/FLTYppunsshXlDIzY2aOUAHEzbX97FgNx+zoSBxOMI7cccOg==');
define('SECURE_AUTH_SALT', 'UIH6cgeFOv8JNxiFMUYHbgGejaUAoUvATg3MvyHEWemNaIczjo0eZpsIeEdpv7oR9QA7rzdhc/RCEcNU8Ourdg==');
define('LOGGED_IN_SALT',   'RZk5B+mvpfv101zlk83dqrStaRONfpVz7ESvnsov+tZ3+f8gWDY+upIw1kpL50fqqTy25dp/9snPqPp67HusEg==');
define('NONCE_SALT',       '19fwe/4ObM0bZszJQkOIbhEYAjMRk4DD9o4LMa+YtbPx24CXC5bHz5Jnm5g2sFpudE1//Vloj5iEu2TUok7F1A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
