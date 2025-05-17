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
define( 'AUTH_KEY',          'q|[!ae/^dhP}/,>kghBWI<-b0U4 fo,,BKvWD_VXHWG@izG~Vv1_|{|/c+}mAG, ' );
define( 'SECURE_AUTH_KEY',   '9g460p>dx-^7Vh$y^S0xK*jYbFdRsy7n?B<80n$%@&U?mvb-+rEFO2[Hg~b2y#N3' );
define( 'LOGGED_IN_KEY',     '.3W|XTH hhvK;^Tay7h]Y(LmA%p~i.QD}]Wh6-_&()$?-MC}14d+u,kgD`y(?Z>g' );
define( 'NONCE_KEY',         'ZXkRsG|x7-m4%`ZJFHw+8KDD(AUMAuo&`Lu_[<^qRSSLsbWNbvhM+?58D2WbOoC?' );
define( 'AUTH_SALT',         '|A0TS`/?JeeJF25Jx-x?0l#3%+ @TUdv;79G|)zD=OHfRi9WKR<<Qg1}K,>SUZN*' );
define( 'SECURE_AUTH_SALT',  'q<kM^;[ JiV&(zzg.h% b,vvHgSUO+iO7{.;K.g]cV^PG hMYM,^zt,zdea2*oCP' );
define( 'LOGGED_IN_SALT',    'CN$;+Z^1hqkkBZ?gsX#bQbb 1fTe[^|w9:-Y&z(xEoJaw@e3~>KEp~^3[Yt9w54*' );
define( 'NONCE_SALT',        'cYz8/vO`Ir5tjp$E?5mW%=a1We<6v(.7[P^jWIUQ%<H>k$W4GcBJh2/{4H!3A8T,' );
define( 'WP_CACHE_KEY_SALT', 'AWJRn(!,ex0ZqA}ts0Da0m)2%X*53RLo1j$Wx&/ 5pRilJq*+i}-!uX((Un^KC[F' );


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
