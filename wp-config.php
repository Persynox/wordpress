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
define( 'DB_NAME', 'wp_rt22_Pelat' );

/** Database username */
define( 'DB_USER', 'rt22_Pelat' );

/** Database password */
define( 'DB_PASSWORD', 'rt2022' );

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
define( 'AUTH_KEY',         '5(G95vNf`bh@xu2O$,xT#%9V<!t3*6z*u*D:ilEU{_CYy>TCz1N*d*&b!5K7P;/f' );
define( 'SECURE_AUTH_KEY',  'KMW@m`1l($aV+g{HU9G7m.P:#[7(cCK[-~G90nJ!Wr6TG!m2yR/{X6MWEsDo5}IN' );
define( 'LOGGED_IN_KEY',    'Ia;6Gzt3lX~GS}i2jG$:C^D1m(`p{1p9ci L~~Rld&.:Z1rn$/g|Dlc-O>px5muX' );
define( 'NONCE_KEY',        '9*;zqNmv/m|mYV:`ioZ^p|7ME ;WND9QBXaw{~%Q)fvOWQl]G=~XbiC^G/te8]u=' );
define( 'AUTH_SALT',        'GQnmMw{-!#(S^Vaf6)Dj HHd7IzCVLWJq}Gy/&!vSg!eTGs@o/}(cgs[`hXPP&ND' );
define( 'SECURE_AUTH_SALT', 'U ,tN2>*Q4r}yUrQC0mEPIV%S_hRx_SKzs!0vnu|O<C@R)|pxL;Jg$}i2$;R.us/' );
define( 'LOGGED_IN_SALT',   'k<)8nFLmq}S.xa/N)zHgB>yW$/C*@jepg]#l+4_J=CrPwR(W9#Elk*7S#K:/ 8$u' );
define( 'NONCE_SALT',       'h:Q*M.%k./D^i&#E9u(:Ep}$*YkUOp{flVXt4yydAQN7Gzr$+oX4AM{$sRKnc#bN' );

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
define('FS_METHOD','direct');
