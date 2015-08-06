<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mind-media-matters');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1Z`?v[;.>5mweR~p@ G!gne+n,<(?CN[L7cykW;sI2N&5-YY H7|fLY`?oX7ao73');
define('SECURE_AUTH_KEY',  'pKW[rcP-]]7|>9Q|,82Ol}7s7?ZGxwKBH}jwdR|QbToX?rz}oHujDJ)LoZ3AbgIz');
define('LOGGED_IN_KEY',    'UA%1mC`B-rd)-mFUVz`MEWQ?lBD`5Nw>&nUhsb-1%&cmF5{$#0*2lpumEU?5rR|4');
define('NONCE_KEY',        'g}K%8DAT28~%Tb9Tb)7.xM]#g.Bn_)FKDs1*#_H `mBsERaMd1&$.-vR&i~_!b=_');
define('AUTH_SALT',        '-++<naKHt/40`-}{)9)sUH_RZZaKg(L.}<m~0_wl~`/iNR[<TG$OAh]Y,sR0B|@A');
define('SECURE_AUTH_SALT', '3k#DA:XS6tu.C|Ra1OOIhkbs)..60jMJ+xG3R:=]}v,V-9YfT~)i%4%%+%xK7X?_');
define('LOGGED_IN_SALT',   '3ZdHFUk+1;6nF. 7n!ho_)n%vHk%Us{ qR+g)s,OH5{h4vRI+?|~7B//<9Nkr[QY');
define('NONCE_SALT',       'X0z]pP9A-!>W%~/qJ5/:b=T3z&9!M#IpPz_G:.toG$1y}/Ho-0@@vR9-S8tlpoF?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
