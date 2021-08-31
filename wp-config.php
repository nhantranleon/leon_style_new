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
define( 'DB_NAME', 'oceanvie_style' );

/** MySQL database username */
define( 'DB_USER', 'oceanvie_style' );

/** MySQL database password */
define( 'DB_PASSWORD', 'leonstyle123' );

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
define( 'AUTH_KEY',         'xhrguzongxmylar0b80lchehvsgratouu5emhedqpck98gp1e9bquvmrjoa6idnl' );
define( 'SECURE_AUTH_KEY',  '8znqchiodjzcx145jkz4dffz8jbzwlnbtl7ptkuu0kpbrhwgehu2rqitwhb9qcf3' );
define( 'LOGGED_IN_KEY',    'z268dsdyhil4hmitkiw8ddoerlvtnuefrh6s5y53nrt3jvr6g5avy9dskl4jzatp' );
define( 'NONCE_KEY',        'eelfpxwxmsjwrtucasxkjygl7lh8rlyimi4sbcd10xrndsihjgscx69ubyqfu0o2' );
define( 'AUTH_SALT',        'tg7wny7cmmreenvspxrhjxgkecsmgcp2thqyshb4q70mlppp0jzz9lsblnpjflfd' );
define( 'SECURE_AUTH_SALT', 'p8vpkbhgc9uj2txucs1zsnizeb6wzcde1oajylvucn0plg7tzjqkwjfjsss979sf' );
define( 'LOGGED_IN_SALT',   'e8ad81lkfazxtv0ovq0hmhqa00i3p5azhps9lmddlqfzemadmjkiumewbaq5lkvt' );
define( 'NONCE_SALT',       '0rmquixtkcmqs2nsrifmealhtafm2t2tmzy1o69lthxnxk1k8oyzrcrtclakiefy' );

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
