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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lifestyledb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RHoWJBkv! ld)V>TN(=I&u)A*atx vgGD9J^+!JR 5lf1#Q5<^vWolWCZc!324J,' );
define( 'SECURE_AUTH_KEY',  'F3QY!)PRLkbp|yej#K$m[%J@XFLXM*QM@%~J^(Mw>>+Fx>@7xo,~j`xe2$@|D6;A' );
define( 'LOGGED_IN_KEY',    ',c[s!:Ro1e6LrI?HKCB|iwx4Z<1&pz}.k$[V[?#YLz/@>RT$EgHXuhA+;afxMt/:' );
define( 'NONCE_KEY',        '-0D}gP,^SDcWvcdoT/s v8}3QbYP^wy$_.ge/y=hRqtly[-zdj*PQu%Yz!$5`xV7' );
define( 'AUTH_SALT',        'Fb)PU+*wz3LEQ!{QHxk 8I$Y3QPC1e7^}qa}%t>D8j`k}<e*1#b:WjgYdSsJL}v*' );
define( 'SECURE_AUTH_SALT', '0SBvVu+2K[<fIU_L#w8R_YCi;]q  MidOyikc26pE3aof!K4MqPoekc*NX4/[0&4' );
define( 'LOGGED_IN_SALT',   'ShV.yN#S8.4n;wHkKk#K]Jv]pLedI2T{!~s1yu,4/-n}Z=?b~swVm8&]AR?Lz8Ci' );
define( 'NONCE_SALT',       'X#-YI<-beXj,R+SZ=F54JB:biQ=/(,#~aV{1&I.B!,572AY20WTu(8[JQ[x0Ohkd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
