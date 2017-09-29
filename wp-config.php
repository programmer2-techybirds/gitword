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
define('DB_NAME', 'mirrorm0_gitword');

/** MySQL database username */
define('DB_USER', 'mirrorm0_gitword');

/** MySQL database password */
define('DB_PASSWORD', 'Ns?Q?FM7yto&');

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
define('AUTH_KEY',         '&^=4jk36a[,JhZF1=U5qN*1hF6{F!Klo6y:sGezbUnVuc,H+A#2p/i)KLIRM_J5|');
define('SECURE_AUTH_KEY',  'tDziX]~v|#VWX;%_iE9_J?F MhOUC#`L2>QxY}YMmub<zN:$&[)MfLglqe<Mn>+v');
define('LOGGED_IN_KEY',    'woV7`7A0?nOLFL+~0cH7v9516`K{EP&IK;2rceWG3s9ld@0G;[CTDs1XRa3eNawQ');
define('NONCE_KEY',        ';I@dermyDGk`[yt&.#wd7r|/,@n&W_m4Bp}d8NDffF]@$qP;<`H83RLN/2>%,,Sn');
define('AUTH_SALT',        'O?_asqG) KW&)j*r`3e{OBS`gGkv[)52#Bf-_]501j| zw3wK7!G$:u$LZs0: U/');
define('SECURE_AUTH_SALT', 'g#D6nX)0(@mY<?xg.-#,extaonvz?,XV-DM!2>b5QS+t{kv]/UY,W_8/e@XC&J13');
define('LOGGED_IN_SALT',   'RGmJIIT2]K-17<zLg4EG*[GWoa<[JvowN#8kqw};lMjH~P^TqcV&<VlPx=i4kV]+');
define('NONCE_SALT',       '<#Oel! |O{~Qwi2cjd)Xtt.-RZ^b`)*UdF.^ ~Fyl~6k|~/zflca 1`P:zyIyn)w');

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
