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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'Gz-_&Z5ZZY_s@3uT?FljRhUliK%0-NZ {G1KoCF-T=16rrWyToU*|Mp,S-]eYeX<' );
define( 'SECURE_AUTH_KEY',  '*GgU1.~A_t&:Hi RT%}zhlb)-%*!IkEs8I.@CJYa%&>#dF B%X$HSrRFux=ZBIb?' );
define( 'LOGGED_IN_KEY',    '!5Wl+GXs3[f/#Dv N7/x,9{P$yBZyrQ?6l1M1_ddW+4.rSre3IT^u:)g#eS%_X0/' );
define( 'NONCE_KEY',        'HK_MS%W&8a3G]Dl7^5|cGnqp,WZsYy..yw)d2ViC6,9sQbzsh~by!kuqfTk`T(M$' );
define( 'AUTH_SALT',        '6*h{jx-i4Q1cQKv)1:X<l9kLpP:oe!}s#Ev3dyglh<0AynvjAfQs:#&jdxK=!.>.' );
define( 'SECURE_AUTH_SALT', 'mIjk_p4vwU2o[a2xq;a.Agrz2RN@[F|:}8upkK@T@5WbX$&KP@GdJ>h.3oaJs!]@' );
define( 'LOGGED_IN_SALT',   'dd%cN ubRI(wj~d;_=u45]TSwKc;w0Rjt>L8Q7GcMT83L-S&Jd}pg%kWz-Do~Vk|' );
define( 'NONCE_SALT',       'kR7Su>ff/!zdvvNJ)=5-70KM=yvcF1e&45Bdi0S.w+P@()w.wFKdmxUOw1m$:ISM' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
