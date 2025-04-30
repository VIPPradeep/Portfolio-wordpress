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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Kj$,m[ou22xdzW$?Y5jauJfn3a!c:bWt:Da{UPcZJ0*jrr1<X8}:;6Ikn47EFJW-' );
define( 'SECURE_AUTH_KEY',   'k4v{gKRq}kS>$KK]}iedbZdc:I.<S)4jn-_,@4hL@Z3ebAwNv^4p-Mexm460hg{X' );
define( 'LOGGED_IN_KEY',     'Z?s$JB{>#:6h}3Et>2lm$XBv|~<fG6T!y-{3<O;_77|C-WHn68L Dh05/!E@#M-F' );
define( 'NONCE_KEY',         '.voIDKbP#XliW_%*/0[~~#Aj#95&=pB=&&q% o1IEfp4{:Q8iixU:Mi~=1^$,bc&' );
define( 'AUTH_SALT',         'e 0n}BM*(2-^J22ZALDz*VxLQX}l>SRI }vR eOR}D %X2ctsWuvvx^=R%e3H=CR' );
define( 'SECURE_AUTH_SALT',  'V:fz6%-q)),?Yz?[YC1(|H</e&_v2(-di:%uDt&D9`tu]drb^8ZQYW+Tq/bRUJv;' );
define( 'LOGGED_IN_SALT',    'I<mtP<F~ou>oA2hS[yZ[t<O` ca)<I6?zuFCv pXJ0ukuqj&Qq4n7vxYoSt*,Y=>' );
define( 'NONCE_SALT',        '8QvSiBxohmx#L{=c/`<m8`+dEbO!xUvjrv]i+.yL4 -hr2YWIzD$FGbctIJ@w6PY' );
define( 'WP_CACHE_KEY_SALT', ')0iZ=C@lW0]R)6gG)}p6u|f!t $O{ihxSvF#d]BB {{tn%JR{txkz_584%t,:lYs' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
