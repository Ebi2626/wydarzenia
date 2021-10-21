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
define('AUTH_KEY',         'IzAOat0h+9kn4lrLGO5J7dH0vB24B7zr70rGOJgeq3RWi2zyZdfV6byekT/m2nKQKAOWFDDplzCZ0vWY4LRHCA==');
define('SECURE_AUTH_KEY',  'zFxxefpaYb9VkKwSCvysxZ4Jj6I07YyubKJv3UvF3dbuKoWE6iIRKkjtztVapgapxcvdeXrgmVdnONX3VhPbBw==');
define('LOGGED_IN_KEY',    'm0XfKUtbZFyeVhAqy8uwl+cU+cjJ9FrjH5B1Seb5s2hSahAfNkHxx3Bhxc5H7yBZxU/kP5u2k/JP1RmaYOSRtg==');
define('NONCE_KEY',        'z1LOxzuOyYnZ0hn7qMEiDb2hi+ZVUAeU/bdwQgjQ/e51w8FHHmyMI5RPBt4P56uT/HFgYuz5YLF7mQjKNY3Jaw==');
define('AUTH_SALT',        't2MJARGf7gCgP+ePCWlg1yihS0tSeMUKMMGY74Hv/XyS3vVqrHFn8xn0Oe3b5/AiSAtRRvNo8tcTBhTQrS777w==');
define('SECURE_AUTH_SALT', 'A+kjFHd4cWjSXcwBFDONBLYSzjx5WpFpo/l+/jbasRzAd9A/Q4YAxlxq5BnBfywUo2JB1ZVskDORDB2tuUX0HQ==');
define('LOGGED_IN_SALT',   'CjtaVk/RfWqHjgx8M7VIYqWyM5IYv2mAlnskmLEVVKIJ+e2cBNrKtK2e1H+IdW5pBNv1vqrKJ5jLiZWQmzrW/w==');
define('NONCE_SALT',       'md3yLQhr6P1UrS8cSfZ8+8tyWeSSEPl6q1P0BvIWfJ+oZsAx9261JSI6VCZGgG1xS+yYy11HsNAlgWvtlqEAYA==');

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
