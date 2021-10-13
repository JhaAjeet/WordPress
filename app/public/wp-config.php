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
define('AUTH_KEY',         'eyfJ9V1F/EYsKUo7EVapL0I3y/1WG6FXV9d0gzgVvrAQ8YrQRifs26syJ8ZkJ4ZfP8C8lh9vqnD/J02xn3u87Q==');
define('SECURE_AUTH_KEY',  'h/8UhlODdGXX8EVGORbGsUOLKlm4faUghB/VT8NTGM33ql4Phnt3cE3J7p1tS8fUnN/L+nnK4tVtrLZ8jcXJYQ==');
define('LOGGED_IN_KEY',    'HXwZ/c9m4f3iMl2dN4Cylu5qo4PRkFhtvzQ9ieb1QKnSvCepKB5NLirRzBqgbHStvqeIo6Kb31MKESZKqh78Bg==');
define('NONCE_KEY',        'pi1A7PwS7gCENeNYlrvYYOVLm3DdoSA9avZ85z5hBlQBr7G6ZbbLBuPXfA4R5+jl+QX87hwnprTQBCUKZJl4EQ==');
define('AUTH_SALT',        'A62K1TTVgNoIV7B6IaARIUX1h+xcqEKkL77EKhK5OnXmATbw9aODoGaF1Q5NdYcZEXwKroczfqWQ4gsYZiDPrA==');
define('SECURE_AUTH_SALT', '2VruG8gfOKFBJ3Uo/+HsoaVGLgq5U/u26p8VF9YejW7gD/6xFR8gaCyMrdqSQqZUyG2TMXmK9cdgFZAf5G3aaw==');
define('LOGGED_IN_SALT',   'TZ5sLeP1U2Lh88R+zvxKMkpiAGIdift8eKI+/0kSd/ZFGg68FXTTezFYymWPD2ZwUdvzYG95mpux7tcERwdsiA==');
define('NONCE_SALT',       'yk3RX6WDe/wbfYd9AoXBV++KvsJa+cYVTYMI607Dz94KlelaBkpbq/miuaTXymYiHHzaQNezVcdVtFKdUkhaAQ==');

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
