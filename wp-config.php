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
define('DB_NAME', 'piklist');

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
define('AUTH_KEY',         '{2BheB:WyIr|TuphnM(nQ3j0lx![bUcRI}3P,CZE-J@`[t*iuvysV/L_2xg!E&4`');
define('SECURE_AUTH_KEY',  'S/R7k.>H819B@j>D9/C|Qq!OB}`n6H44|jc0Q/Q/9^84wSm+Z$IJR3:{,7(L2^>)');
define('LOGGED_IN_KEY',    '<$QR=wiw0ZA.:BzYS,p&[nzb}J[,|szL%1[M*8`Rd_[j$!DSIB?L.;G+@KPM_;Fr');
define('NONCE_KEY',        'Sso~&kdZD@NX@IbsJf&ky_2lUE#ylBnVCUTezc%HD lEEtg^`O=4{pjWf6szQHes');
define('AUTH_SALT',        '2s0>x$s8bO(PT)Myqf`74x@dge2/HE!{olC|VfnL(mMn5PTfR<jO&]Z#(.ia&C/l');
define('SECURE_AUTH_SALT', ',K]>CTSA_,@oNt)iyvuu1@0Ba1S:`0DM+!=s4!J6-hX&<tJ_Cds[eKm+I~3?0z?+');
define('LOGGED_IN_SALT',   '}f2Sqq:03Zfbc+2npRPe^K.4{K:Qse%GE?g{J#QDaNNG9| s7Af$0p].1|hZC)Q7');
define('NONCE_SALT',       'CWCy@E1n2Zv jBvM<yxcpr#x;.xecQ:!D)+w3+N$aat{m_R-j;S-xDQo=*UI.pP`');

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
