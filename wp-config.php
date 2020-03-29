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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
// define('AUTH_KEY',         'bfV8=-xwB&)}P+-7ek4B-;Bk.Qr#{W#!6bm,z14Fv|7XY3 -+|4f=t<~X%RGhgZ<');
// define('SECURE_AUTH_KEY',  'W5d;y ef:vlr|,dOn3>$ Ii|RHoBK`I>RLpe^vLhovJCB4@tB$6p7Lr:Eq2fBYi[');
// define('LOGGED_IN_KEY',    'J,Er5gPUZtz}CJ}bf-FuEfV;}bjB-}xwf;OzF7:INfN_>%+{AIVN]r:OmP+-`4#C');
// define('NONCE_KEY',        '(fr52dfnR4rQ$*mfB:)->HUA_lFgk8<87m$/QM%Av;.]yP<+:M-)vW%`g{lfK@#R');
// define('AUTH_SALT',        'ocIHu6tV14RlJNv|Q,Dz#v+j`r@to,nf^595Ek*WSI-}+)+s-Ai?LABu3[R6OptD');
// define('SECURE_AUTH_SALT', '9brBmhO`Z,<jMNn+4H+!Co_~o%thdR9v8]H99Im;4buF[hOfx9#@@$>)+j-c[{rx');
// define('LOGGED_IN_SALT',   'k]n]6l=[wxIK3|l{-JXofKNWe/@{phm}X~oq C,LKcrgfZk*e:-?*{^uRwvy5$I|');
// define('NONCE_SALT',       'uUP8n!<J+leQ.G9q/bN/%+qQ<z?TwaS#P:m=[lwgkKUG@ZFK`ngFS8+1|o8gZsU(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpt';

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
@ini_set('display_errors', 0);

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

// This creates debug.log in your wp-content directory. Tail it for PHP issues.

$environment = getenv("APPLICATION_ENV");

if ($environment == "development") {
    define('WP_CONTENT_URL', '/wp-content');
}

define('WP_MAX_MEMORY_LIMIT', '512M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
