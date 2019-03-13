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
define('DB_NAME', 'wp503');

/** MySQL database username */
define('DB_USER', 'ks');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         'dKT2oK2GH8bsy5..y1A~5(Z~J$%;%yQ1C|]rZ afL!BT#ShqF1%(nfL4 7#8_tkj');
define('SECURE_AUTH_KEY',  'Y71Y4&e5ouSSRLbi @c&7]bDXHr=T^Cf|e}AE;TMr$R,EkI%y}R-Lqp$=#~f>.V,');
define('LOGGED_IN_KEY',    'I~[%5<^NMV4Al3e+<ibf&?ADo!Y)kD3s?73n@Fu4d7FLVf29@JA6rp]0`+shcKiH');
define('NONCE_KEY',        'F2n5;fsuD6%I:(dnP1O*:?Di3WvY?]vte[Dp`u4GYXH^+ }>(gSR|hr2@418C)b+');
define('AUTH_SALT',        'MoFSl9JIberBP(^Iybj}=kzvKE;L~25-]9dm_1@%>&c=,4C8roxm5){(|4bw`(Mq');
define('SECURE_AUTH_SALT', ';ti]II =8K0N.`wH%{P^+)fSRBG}L9^x*-ur{APkB.U.Y2#bDf!iK(ksl4Hn(kiE');
define('LOGGED_IN_SALT',   'amSx6 CZj[vK.Z~Yo@$JT:4^R`:=>Do8MX^8MysobLo}x|t~R&v)?}/*}Cre?X`p');
define('NONCE_SALT',       'Ql28bODU|PBIRj]&$jy.ktAD<~^,!{PY<CigDV;pa/>!Av{YE?SW3y|a{l>?Z|Qs');

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
