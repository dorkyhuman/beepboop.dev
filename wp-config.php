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
define('DB_NAME', 'beepboopDBkb2me');

/** MySQL database username */
define('DB_USER', 'beepboopDBkb2me');

/** MySQL database password */
define('DB_PASSWORD', 'v82vmdYxpg');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'gUj,0}Se~;tp-]K[#5GhGCSd~hsp-[~[85G4GCOdRdZo-<6HEP2TeamPp+]#l#6HD');
define('SECURE_AUTH_KEY',  '|gw0C4[40CZV4RNkvsp#_]5WPaOHStlxlxp]51_:]5SO:OGStlKldp[oh_:[Gjf$<');
define('LOGGED_IN_KEY',    '||4GC!0RdZ8Zkgsgsoz4zv|0R0}8Ykg_DPLWLWSe*eal#1;t_DOK]KWSdSdZl#lhs');
define('NONCE_KEY',        '@>8,z}J7R70JcUnUMgz},OhWt#-l~t#D1~5[DaO5SGZwlSpdw[_o!5:G:|8RKdKCV');
define('AUTH_SALT',        'By>nu,7${AQ3IXn[8N}8NgJcs!g>@!0F40BRkNcn@g0,3ap~;wHS5GWlOw_hw[C|8');
define('SECURE_AUTH_SALT', '0}cFUjYnOdthKZp_l8|5OCR4KdsZsk@1[w[@4NC}G4NkZ.A;HeT9WLe+qWti+;#t#');
define('LOGGED_IN_SALT',   'vQIYnQfv,n${B${AQ3IXn:CRhKZo@gw|4@}CR8NcsRkz>rF}^0JY_2HaD1HatWp');
define('NONCE_SALT',       'rgr^j$}7,3JYBUjybQfu,q^I{EUjX~:CV8Rhwds!0z[8N0FVkNBRgvcr!0@}BRSl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
