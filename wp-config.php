<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BlogChef' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>l2GQEk*3VTUGx&>E#YK,[pJ)KT;O;oGDGZ?_wXXxTyIv+6$iJMRb@:j0qZev5ZG' );
define( 'SECURE_AUTH_KEY',  '2V[1;O.Vb=CT-8QeAfI)o@_*ME6UnzLwRWy_NuI6:7e<en<]n*>]t>fj~rUZKwme' );
define( 'LOGGED_IN_KEY',    '>8Q=LskhF!%EaCA]WA*un<@&[r <URYix^x,5}-c18}~aGxfafNb_?I>2_MvozEV' );
define( 'NONCE_KEY',        'zH+T$RP}OX<Rfy~[+UENIz8pa@gfc#.q)y{Ytwb1v& FEOQGW*Yik.Cp6;&)9mDs' );
define( 'AUTH_SALT',        'aJ%Exk%:2avyBSmi)ijG{D8Fqmi@!l8!,J<C(8Be$6VL3Eu>q<E5k8)5b>2J7<CV' );
define( 'SECURE_AUTH_SALT', 'Wf*a8koMwL9yBFhFICxK:L)LLQ?R}P/U<>NY.BZmh`%~H{x&45VJ1TqT(;;rp2Q%' );
define( 'LOGGED_IN_SALT',   'O=&V4*H9$&;!T>khw9`h3.Y%uY64hbF8hf]VA6-%s~kS-&fTd;]6a2$8pOHzCbe4' );
define( 'NONCE_SALT',       'o}=7;QhUlI[a>3gAG^Ri5bOySE=iYBpxBRo`-dn{u/V,A&#,V:0pb#j.M]MM:h-m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

//add plugins
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
