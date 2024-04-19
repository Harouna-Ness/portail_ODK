<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'portailodk' );

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
define( 'AUTH_KEY',         'yO->7iJOt|r3Tlaj2KKh|i R2C:9:kD4CMi nOoV=_xJ^Id*:j{SZP<oRB/(9q+X' );
define( 'SECURE_AUTH_KEY',  '[|eWIj]1~^~!lj6R2uz p>5?0znE,LYl$GHHX|N:3{UXY&/<+`A?Ps4;dQsG[1P*' );
define( 'LOGGED_IN_KEY',    'xF$R0tSFk6ewbgz^k7Lfb^x:zeq6Lf:i;/}Yo!p_978rrNzz. m-&)tAj, %?#Jd' );
define( 'NONCE_KEY',        '%KjRn2Y7P!Nb.Lys:-y*qMb R;HW|7*0C(lL0/Jc}h<$Z.7[8(<dAiEJm?j+a%]y' );
define( 'AUTH_SALT',        'CgrxBiq31`)I&O(u*P:tY} zrFCaP2*5V0L-Xv8pZpN/JOkAQ[6raSPh+Z2T=z5!' );
define( 'SECURE_AUTH_SALT', 'CNX,aU;zM#MI^z6y%G.HC1ZnO2ucUsPitRe&!]&;;)j5_Dl4E;9A(g[F#$b~*RuC' );
define( 'LOGGED_IN_SALT',   'e6tkq3R=cJ~SsnIkvH_TjC>_mmK8}+g0$C)~q6n/;NG?n=g_:b<ecJN]W,:7ab(D' );
define( 'NONCE_SALT',       'czBwtO-smPrRAl4IqBr/7/zOnt<vjxKhtg=S;@(8XfZlUXYM7Z>u3>6RV}~}8V1o' );

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
