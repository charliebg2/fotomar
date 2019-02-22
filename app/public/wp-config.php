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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'WEcBiK0GZbR7kjB9rBNB1yp0A3XbORV7OSeYlN+RpmecIanecGUslqO7QbtlTUmuCa56qzf+NBt/ZQ7SWjpGeQ==');
define('SECURE_AUTH_KEY',  's2uLzze5n6DU0JVAB9eevdXyDB46b9GcIzVVfms4gT7Km7CmmScEs3OhS45TZ3fUPyCB5USPBX/G6oRk/nzZbw==');
define('LOGGED_IN_KEY',    'dM1VOzKsrbiEqQXB3ubfAOcbpO6vEGdkNGhWz0eAv9Nv1T5Eoq1sVXqkb6+pBfesBuCN9xaIqJG9H6NN69NtmA==');
define('NONCE_KEY',        'JbeCtCNED2Gf5XlpZW1ACXFLZzRaWnYi3IXDmEEY7hM07vlCm8jr3q5LOzB6iQO96aw81MOCiaB2sMddpQZI9w==');
define('AUTH_SALT',        'lepkJ++9N0o2MqrRqnG0NUsBzP6MZbW0FQCV0fcUq1P3rBizltwK8HWP3tJtwK0bdOukjhdxAfs7Ytb06SrBvQ==');
define('SECURE_AUTH_SALT', 'Jy0o8WS+ws/MTvoWmyJ97j7yKumkJwh25qdWPI8x87ez6Nhj8tHVbDzDGI9DFkTzBhP+6QeWlTzIcDNua9SDQQ==');
define('LOGGED_IN_SALT',   'HXo+kpY9SN8hmMFY/9BtJS4zvrqMjSgq+CxtZQBwtJNXMeHwStcLk2XfduKtHxmsbi9OwiRrX1VXglxKnr2W0g==');
define('NONCE_SALT',       'AeGKJjuOMj2TJvQfSKmA1mAVe7td/SWgQNlpxGN+BbSxwBnRWHkl5Ci1ttgzL4gGus8fQAiqc9+OAxvS4dPblQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
