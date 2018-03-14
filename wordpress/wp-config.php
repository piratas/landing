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
define('DB_NAME', 'piratasoficial');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Roadrash');

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
define('AUTH_KEY',         'C.UN:PWF.(AUQ(nr<x-gq=Z~8SJy4S0YIg/jIYD}w@v0qQ,u3-gTB^2gbRG&cI)j');
define('SECURE_AUTH_KEY',  '-nksg?Xd*,Te$R;h9e^xn_l:wM].]} @ze?:HlIBK`_wU{]<W-_.8NsyquONL6Rk');
define('LOGGED_IN_KEY',    '!f6+PE>5 teRR<olqF<D3hMxpQ9)J+!p|mxTjT}{&rc]C!7*E.G}6mg9u4j+HbZn');
define('NONCE_KEY',        'CxBJTFN4^|KZJ 7 PH=O6VoGG]H8|4q<w=Y7x}z|H`3NeSa^aX1V[5jdBjj<MV;=');
define('AUTH_SALT',        'I=wVG`>;-EyiU<*KubJQ{1$.%GzgiO{sLJEXPSAuWL12p<$MM/{9P* y^EPHw_4O');
define('SECURE_AUTH_SALT', 'M-TFi]~mJ[yPFDy$13LyGTDbKD3e<Bz/~74g>iN{240P7ZnYRJ_xZrU[o`lIE7gk');
define('LOGGED_IN_SALT',   ']FTNuJtgIXrQ 3p/:T$HdrODMDLHYI}!j-a3#SE&Q?c*yoC@1;RIrU%%CEfTy1Ci');
define('NONCE_SALT',       'Tmxs /7x>wKTERwq-@63_Zn@^BmFs4!5N;PjC>{_f]`3k/H@0RAo~PC_;z[C0a. ');

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
