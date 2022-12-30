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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WordPress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '!l/2d:&:T|zmYqo9W=xL ByOq$9Oc&69QUTLxbXT`DoPOQ=JL:/mD3}4hiP,zLsV' );
define( 'SECURE_AUTH_KEY',  'P<uzjJ-`lAG^M?^jk+;xLag]bBW.6wu2R4L8W7pf`ic-zg O7|s3MB*8+y$0v^t[' );
define( 'LOGGED_IN_KEY',    'UgeZh-RFP|4&F 0x,3Fy*~&p{~36pu^dunG>s?3PD;-5X4l Nk>qKqmg ,zqoU-~' );
define( 'NONCE_KEY',        '2W{gM)ED)0<z)srt2RICx5Qrh$|=D=_R0(a8BOW/[:)2d$Iw& ljU3hZ4%I2.&5M' );
define( 'AUTH_SALT',        '^:JBnAsM9msTCHcsA,w6OdkapLnD`rKu*_W(nVHI^:$zY/}O_DDy#WG2kGq<(Ml:' );
define( 'SECURE_AUTH_SALT', 'f9uMXjZ{a6q~j*gJFK^xN^Xs[HmktkX*>;fHYmV @,S].NKbyKiAfQXNNazdKxK-' );
define( 'LOGGED_IN_SALT',   'YTvBEE0B14%?XsoxK5.>jl3pM#B2h%5P#zWSB>l6{j{d.yIA@X2r(pn^x7i`9zE>' );
define( 'NONCE_SALT',       'L/G2]9*srJ~1~VhwM47vzf?WJQbw8Cs0W`x&/!QMyQkV?`B(-1mAbSS|(t<*nYsg' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
