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
define( 'DB_NAME', 'wordpress_intro' );

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
define( 'AUTH_KEY',         '[J+6O3+,Nv#Io=C#ixB*G+46D7KGJ4`)Db+cP=I4T+ vmZGYdg#bnghIx(JS&8<h' );
define( 'SECURE_AUTH_KEY',  'Yg 8P:>4/+&+rWw00`B`a?DX*{v+3oP3[m(z4Qp2KRj[mgqBa54g_[.|px&i>9[G' );
define( 'LOGGED_IN_KEY',    'f77*ZHsE5^V_V4Y[B|HB)aKI%J#m_%!*x3[+M*N`__UpPbsfHCRBK5TM`ItXr8e4' );
define( 'NONCE_KEY',        'Qin5/x[{uZLtWry7U^cMIaL]:SP5U%=k.8HCm>{{5n{caYTTtj^|x7v~n-ZZ!]*$' );
define( 'AUTH_SALT',        'Jf;0157*w^)31Ey|.wyr%L+l.+$S&/=&ZX@I4Ytb1]iEC.Rt>*=?`AwnH0v-Wx<~' );
define( 'SECURE_AUTH_SALT', '*n?nOx63xo2hw,O-nWQOSXStU%JEhm{YGr<((wK_#IVO,pFI^vIOED^)qV],c_]S' );
define( 'LOGGED_IN_SALT',   'fh*LHu,[6&xX-|dwZUB1^RchXYKLan.xZ`$PC}Lzaoj>w]`2>60I}Q|.8]:CCQNj' );
define( 'NONCE_SALT',       '/s:mnsB>(gaSZQO|Mr;66]8iLzy.Y<]/;`2h(F!W5dg%KOYf|B:?vko>Xsp)|~al' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
