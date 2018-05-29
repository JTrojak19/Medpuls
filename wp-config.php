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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '2b54a0e35d40968f33f5e91dee3bc11a80282ac66dd8d5f7');

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
define('AUTH_KEY',         '_FZ>=mdtLAcx^Fa^DkLh:5fPUW-s}NUdL`:4j;F/!c/vD>J-.n5>r]9m?$CZS=*&');
define('SECURE_AUTH_KEY',  '37^mF npZV}u?X>ucrWlR?sz][7Acc&?*AYCMif)iqH)_tW9S}?&H`Jb37Vp*fjy');
define('LOGGED_IN_KEY',    '0y5m. ]^bm.AxO!]3xGWU v{Y2j`unLXUZh4:zmo0LWD(Ngi`PJM)XN$<J57sc[0');
define('NONCE_KEY',        'P[w6V84<XdXQWwD g?w^Y|J.}=#5N]EL>,o&1VAQ(F] f-,.Dq$w>Eh~*ynk#^s>');
define('AUTH_SALT',        '=!_&.)/;QlP$(%0)R1]X-y(fCUGSYK8W!@.uPL$1@N Zb4=DM,.8jx(EbF0:oSVw');
define('SECURE_AUTH_SALT', 'Qkdp<VWhe4cG7PH!Gi+$$?B8<=InJ!b{6>q;y[Me^lqSAWmJUOrcXxUb&&J^%gRc');
define('LOGGED_IN_SALT',   '3uUx3#EfTJ[)=|o4lL+oHr`^#[@f&.<_8XR ]bQsv;K*#|bUUX%d$>2K5fh/MPql');
define('NONCE_SALT',       ' YR:LvX/FiHqO7!#{aVW__)4;L$Plp&*B[<iAbrAGD5_c#lL;}mPy9dJZPtb}`7A');

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
