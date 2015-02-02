<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'carticopii');

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
define('AUTH_KEY',         '76I%P1d*FC;yF*ex2<Z3WA2RFCG#,)]qvsz,yM<mk$2.?$G@-}o6O76^By-9&i;#');
define('SECURE_AUTH_KEY',  'NGjg8@{9lJI2|g5fYQZ+Hvh<GO@+.s|<S!/g^,#-SKWliw;fb1<L,a]2=kWnq4Kh');
define('LOGGED_IN_KEY',    'lt*~7Pa$UZyR_lF7p=-c]f.LDu6z|rO*V4$-b}sJ++EK _a+hx1Y][}Kvc Z`L6g');
define('NONCE_KEY',        'bb4gA.y3+OBj~:aL?n@?#!4(]F#XJ=bvg?Vf8t|dXn}(<||n}OR+>q4yv.;wx?YZ');
define('AUTH_SALT',        'a$4+Sb)<qO=,{k[!r}[RIf-d>RM2JJ!j+-Tr[,.UMfK+*(SZPL7Pk(*i&NI=xN-@');
define('SECURE_AUTH_SALT', 'bZ#c[[KsG0$7G`=ae8U`sA9.Z=Be?B8--v7Fc{V7ExqF%+&O5?))aT$GNzj[04P[');
define('LOGGED_IN_SALT',   'Z43N!yGy6;^s?h16g~dlUb>#L-zMGAf+AkCI C ^:iq;R<*s(]<44=dJmi#j|20^');
define('NONCE_SALT',       '1vfGXa#hi8he#sw{bq;;]p,mh/|]>5jV$d2*uUXRc9W$aL>_66|r.3~f3^9!/k%f');

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
