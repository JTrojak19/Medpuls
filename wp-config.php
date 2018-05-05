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
define('DB_NAME', 'przychodnia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '  `&mhtej^u5CGxi(VN#kN)n d]HgT_c&-N-JVS.1J=TPiI_`kM6]+-<OD>ZT[If');
define('SECURE_AUTH_KEY',  '%Q[_bz81;m,F+P ([,aKe=ciF~Ec3]vGN]<.cFJ7Uw)^%nI25& E6Lg5(3yYtz?-');
define('LOGGED_IN_KEY',    '&_#0Ix3IaD7B]rfu`<;KC=w3FIOuW>t,3GJ]zn;1OXeb(Hkp?TCOHVq5eJj]IKI~');
define('NONCE_KEY',        'CU@4$QS0{RR26<AWyJ7VUeku*8x0vD]*?YV<}RpE)k$rwOjYZ#-`!MIrRj;y^>to');
define('AUTH_SALT',        'vHQesc E0W*=uycDWYk?p:+2,?Y)Xuv+-hn!{2=Y~F8F@F>Hn]~N&). IY.mR]$e');
define('SECURE_AUTH_SALT', 'rJ1gn%m*8V|e_d?S[9Cr8n3P}-QCb]<pWZmhn*Z>V,eJ{/0p8]mOq!S}]uPnz[b`');
define('LOGGED_IN_SALT',   'TE{i|#q(-N~R)oAqWLp}aRDlek=(nN$d+[x|mDgd(I]h7l%uMUO*vg4^96!g:^f;');
define('NONCE_SALT',       'wjb.[;6ox51/O|+YuNN%.nN+fI_tL{Y+.IIH)_(E[1ZC@m3N`~0C4&7D7m/g<-r3');

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
