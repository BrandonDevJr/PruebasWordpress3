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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'HGdV7FBKxCTfBiwVs/y7eQpt2kFSRxIrrBv8w4gkT5uZLKchxXz4/QSJxMFHa2PGPzES4thU3i8Kv4DZbsbfqw==');
define('SECURE_AUTH_KEY',  'kcGijU3hMbCMt1oX8kIYUoqPIvGgRcA5a0ScM12hQRG1JB8EtGDddCy3L2CvwqMvEZ6ER/9emCO7VehTjZKaJg==');
define('LOGGED_IN_KEY',    'XOLmNwjspKOUE3NATDGi+ctRii+2KL0zk7rzGr+MxaEyD+y/CMklOoYAndDieZY9LU2SY1iAqszxyoSbTOVNrg==');
define('NONCE_KEY',        'N8j0upx+zUBFIyrmeItb9cbZ4wWRKST+HPFBAqXR+VXInA592E/vpdVRaY0JAwMMpJfqmYk9EGHY5pRk5TNA3g==');
define('AUTH_SALT',        'qx0KsyLGsrHNsNi4aFbIvarlzpW9iOKs5RrCKqdMXnRsw+N/13PQIir1xbhtDgji0BpFVTYgIJ8279fbQ2rL5Q==');
define('SECURE_AUTH_SALT', 'u9CjnSq83NU9Q2Ba2hjk1p9zqhcDi+HLM0N3tOtz87MX/sP4lbaIVfuThMMoYye0iBkCjyH0rapxhpWAGhZajg==');
define('LOGGED_IN_SALT',   'JsDJ9MRur3t2YuCu8XajNDC2ZgL5e0o/1g7793zDHuj64uPy31qufr6G+QU83GqdLxj88aYru6oBMbKLjlGuGQ==');
define('NONCE_SALT',       'OUGc5avxJ6w14BfipjBc0lrZne7xlx2FyZlRn00MFsVhv3v3ZoTTKVN9lWpgexJnJJjhP/2Q3C4O8wtcleht7Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
