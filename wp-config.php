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
define('DB_NAME', 'katadeals');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'yKPv3Hi J7XW)btE/|{;Z$K;9)O4,95FUgwv8kmnx,g66badVjo~ lg}3y`[VRQD');
define('SECURE_AUTH_KEY',  'jrh>%g0T1s<1gg~kKe1ZWvyjN9M8|W<6~(^0z}q |3p![/#nINe3rx;BKtIYi3lD');
define('LOGGED_IN_KEY',    'u[KN:]/),g!T0@@jERWYBo|pvaE75(+;O/H ,}|%IF(yF<Pu1Uy_5<p_o5Y|awob');
define('NONCE_KEY',        '90B^{AX$fbJAxvrVqVmW_@yl:Md<!]Fd~kQNu %d:FGa9jh:8_NYJP-:BUC|##FR');
define('AUTH_SALT',        'd69eg0x:r[z!:/^X6.5d3?sDZqwn(+%;UpzVgQAx=A~h[K+I#&yGH-AmsK5gf@E?');
define('SECURE_AUTH_SALT', '!Y:`edBM-TKa@-ki5p/@:E/-W0`IHYlGnDP+-y)pM8wXjNMmY4RvH+{ez71d1lFb');
define('LOGGED_IN_SALT',   ')D)e jW>;wgTm(l@3mk8I iE~l7&qBA{#,,sYEIH|utt!Rx7H3:$t;&.uO8iaHa@');
define('NONCE_SALT',       'U@WzoM0iNq>fKj;`*wy@Yz,9X-2m1dl/4h:;/Wu2_Wji)Mw&{DA|5]`41>oFf2%l');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
