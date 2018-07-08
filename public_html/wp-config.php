<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'jerepahd_wp561');

/** MySQL database username */
define('DB_USER', 'jerepahd_wp561');

/** MySQL database password */
define('DB_PASSWORD', 'n93e[pO)0S');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'u0wav0ljmuvuqhozblb6lesbiizs8cuwpjztygavpx27llhokq7hu73cv8eeszgw');
define('SECURE_AUTH_KEY',  'uxat7060a98vsd3gxcbfop1soaizwxr97dmai5lc2rajqphgjg8xcn3pyqqyozpp');
define('LOGGED_IN_KEY',    's3flybmrahobpzrvzzspzybuomqamccmrpqnbtkaqm1gwkfgpcbd2o8dbp3pq6mz');
define('NONCE_KEY',        'lu6dyxhoe4dcs6jh6xghjtr6gaiknhhlgpsyfdqdm2h5jx8axqkm6mvpuio2rdyv');
define('AUTH_SALT',        'adixkwbsxknm3e6f7qpsoqfu0vtvmiyxtxfdzsfafnid5eefcraznzqpshrwsqzz');
define('SECURE_AUTH_SALT', '5dil7bpnkdnhp4kpj6xvmclk9dv6enthkoycqqmndjcs1ufmz170ilj2bexdpfbm');
define('LOGGED_IN_SALT',   'xnqazhi0okblfnkagsnocaxdbrhirz1dtoxp9tedtd0h5qymypqlbwvwojndcp16');
define('NONCE_SALT',       'yczbhqbbvosmspv8r4mzkizzwzcxuvuzl6750ampxg1tzmxmmh9en0bw1tqxeafm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpwi_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
