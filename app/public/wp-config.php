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
define('AUTH_KEY',         'gg9WOLPmOByWrh5ttR9LtZIZUG66F/Q/aathhrDMWAjZu+QNC9D35fJdm+hSrNbcYUu30yG63jame4et5Go4VQ==');
define('SECURE_AUTH_KEY',  'dlSuneOIbQFvhMPz2uSAu7DhbHdZoV4RLEYcy0sb+QC/awKFQrv5kpjDO76X+uWq6E/UF0G1QEbSOhFbBBSgfg==');
define('LOGGED_IN_KEY',    'D966pRSg5QNoG39Z7MG1yDAY/kgWIBhjzoTBgB7JLrLKZd6ERAf+9+nv++cTrjkoXmb7uQF7mc4+py6JEjxoIw==');
define('NONCE_KEY',        'GsP60xlxsK/mqZEzhBhSaHjaOoX58gXyNQhpgtaZJb375RmIXUu6uzH1mXBSg94daKRR+cgRJDM0EREf0EzXsA==');
define('AUTH_SALT',        't7d4/+YEkrduozV1PSQvzwMHwVKinJwu7w+B6u2psxapRhEs/Il+M8NwStv9MPInJcKjOt6Rkv8crdDoRURWFg==');
define('SECURE_AUTH_SALT', 'GvE5AY+Yado4RfB5qLRc+GlRi1NorP2HNP1hgEqO56HQDR3/yprdSX66ky6pd8iWnk7xjLjUHosXp6lTlj3z1A==');
define('LOGGED_IN_SALT',   'MxbxC7qe0ha01buZC9Z7Jur7Uuyar2YdaFAk1Lj+dte0TQ8RxHO73eK38BjCB0UC2G5NJQ6Wo5C0f47KlftBng==');
define('NONCE_SALT',       'CFdqEF5JU70yJ1MvvYo1lj80Up2i0GqbgnEMP8ZEDB7vlVihHeFrooXqe3XwMHf99ns1APPgWluqehzJ6v3GIw==');

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
