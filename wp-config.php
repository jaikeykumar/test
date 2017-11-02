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
define('DB_USER', 'wordp1');

/** MySQL database password */
define('DB_PASSWORD', 'Redhat');

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
define('AUTH_KEY',         'd5E_+:-q#j,!^Y2FD#FVX-B$^Qd}*K$){?d@;<xKtd&5-*$Cjrc=[v9! }X+b?cR');
define('SECURE_AUTH_KEY',  'lzb3oWI)C|E)$n|st[6G_fwjisAsK*2SW[6 A{_b$-L:pG.34l(UI++w$@$+E[IB');
define('LOGGED_IN_KEY',    '+D.*:}lt?o&M)v3&kjZD_my[n8J&n92tdeIy0#%~, .aPZ5dVBryQl(:[:`0B2bB');
define('NONCE_KEY',        'u0Qf5|C f7YTweoxCl0 $q-g27Vto7`HavRnE*k=J++> [fQR<QE1yAx6tF?p(O2');
define('AUTH_SALT',        'k_>tWp!sW5+WTJ?&z)%h/Fe*zsk:P9dluAge`-kb^s*s#+z-Y>jd_,Qk5btpZi 1');
define('SECURE_AUTH_SALT', 'Loc)hb+Qoqr17-) Ax-W*0fM!8@sp*L|[{KKxU(di72#TH%{4B,>ljQGGtQcAe;H');
define('LOGGED_IN_SALT',   't->pYn@a[WMLFV+$J1MV(bj#tfAo3}wE#5f6v)5T<z2C#k|R5|>s:|YOHtS]QD{:');
define('NONCE_SALT',       're,*cvqo+lr7dM4zI{jho8^$n/R9xehlb0*etzy9`.ymK-fCT!TfJX%+4`ykE@3.');
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
