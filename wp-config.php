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
define('DB_NAME', 'clanwa5_abrhs');

/** MySQL database username */
define('DB_USER', 'clanwa5_abrhs');

/** MySQL database password */
define('DB_PASSWORD', '4[yS)5P20q');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'zf9pbewtzhkytusbn5kb2cfiw9lzom1nszdyu8xh5fxgnpiz8xsu85td3ixawojg');
define('SECURE_AUTH_KEY',  'ew5ruakhz3eiyi29nawhn871q2frqpjeq5bn5b5lhei3jf4lacbgm95rjlelssnp');
define('LOGGED_IN_KEY',    'c3m0mkwgzfdmh2sqe8j3aytvlsajkg6tdkndttrab1ywsciyruwvpgmwyzivp2eb');
define('NONCE_KEY',        '5xjxdfgtzanw51k7svus1pryfd96fmyokayr8pecbdrhz6ihqlpopatz4ovzelgl');
define('AUTH_SALT',        'yq3twevs64mhqkhqrccbphkjq4evntzdgmyrwl32w2w4pbpktsiqrvxysmsstatn');
define('SECURE_AUTH_SALT', 'o7kshrizdhg769aypbd8aipm10ra7sngah5rs9ahay2j3bzjltigoefefoubl6vz');
define('LOGGED_IN_SALT',   'w6spngu2q6nrzjvhlqgpc3ws4zpuwcb5ymkjm8mzhi5wugcuovayzznq33wtc9od');
define('NONCE_SALT',       'bmie8ddfntzdsykzuw0fqe1x4xubc9lguhnfyu9njzpiyapvfopiq62es5a6cukz');

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
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'clanwallace.net');
define('PATH_CURRENT_SITE', '/spectrum/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
