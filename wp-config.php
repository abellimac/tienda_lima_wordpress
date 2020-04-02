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
define( 'DB_NAME', 'lima_tienda_wordpress' );

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
define( 'AUTH_KEY',         '=S4m|K!]t8e>9}yCgy*c?  QqatJ}~GTO<(qmMJ=1a`g7jbgpls1d.z+Q!btg!: ' );
define( 'SECURE_AUTH_KEY',  'SAT!,jufB@FbBBo<F^$;8=iA,y!xktK6ks2yd@SZuNUau0Aq,H<yKc,Kmo4.>^6:' );
define( 'LOGGED_IN_KEY',    'qR|Q35wTn=3pwTdZ_[}XcGec(F^ d%`$ja7Rp|*B8;2GM*E]{AJR~g)54Nw0IBE+' );
define( 'NONCE_KEY',        '8T)e1xynw~Ii5zN@#@Pm)&PBFHjs#QWOkYRbupj7t%8K Mx2IIeJ,8i91i*N2Nzv' );
define( 'AUTH_SALT',        'h<2dXXA$!NjQKw$&|<J9NH@2vT)RGcy+~&`>Jz40<$tq<IF3cg<!mT4I]Xl.t-ud' );
define( 'SECURE_AUTH_SALT', 'm3Ff7-?>D#qtYzKUZ&(_I+gYZ)ic!$KDKu`y#v+p;yZSdx]z9Jnm*mz4`ALnad|O' );
define( 'LOGGED_IN_SALT',   'J =bZ$Emq90dM;:<24z3RD<jp|MY?Z<FQ($](7VD,QViwm24UNl8zG`4r~I26^sC' );
define( 'NONCE_SALT',       '~Ol>xNd32CfMXi*B883l/K!aa}wdQgH=lHN]X;7wtlTu.]63zV]rb?Qu0J{TjjP&' );

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
