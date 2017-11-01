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
define('DB_NAME', 'midterm');

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
define('AUTH_KEY',         'k592e5,1K1. !o?I&pt~#m+y:q6rr1Dij0Y*<Ir7>B8JT}``#&8!R{5Zi&NbM*k+');
define('SECURE_AUTH_KEY',  'IC(~.u3;H;pvCx|<nKq<9,{~{wxh8ux`Jiok[dN.B?u$63<3z!-Er#Am^%w6zwo6');
define('LOGGED_IN_KEY',    'q}aVB9&bLdg<PW[~V)s%wTy{/|&;0u4mRgVI7iPB4JM;7UIv-$IR,`:x&WUsW<Vy');
define('NONCE_KEY',        'b>YS`&lA[V<;3gyviieK(.~q3oD!C[#I-;XyL.cpnJm6^w/7nf<Y3=smB6e^}R_{');
define('AUTH_SALT',        '.k_:XV/c4)U/C92uW27`.x=UCq24qid7k7m`:523T1Mznz[&Skr,JrLnhZs8;zkx');
define('SECURE_AUTH_SALT', 'W)Z(mN~sB|2v#>_KS%LFL#I:il^%VV@_/r3=PU5<)(_A@6GPjij-8j=>!`oVRL>F');
define('LOGGED_IN_SALT',   'R)~us.|ijPf_ZtBHT!cBEzU&}*hb<6nl@38*1jd`@Xd}Ch)?f`F5Bsl)uEijl3BQ');
define('NONCE_SALT',       'V:zB:;9ZtmvEecf(=d<=L{-=Ohzs7#F}j3ez3[*eY[logRaiI5_K{z,Bo:QJ5 <$');

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
