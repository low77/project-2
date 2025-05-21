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
define( 'DB_NAME', 'u424620186_WS3Xn' );

/** Database username */
define( 'DB_USER', 'u424620186_haiRB' );

/** Database password */
define( 'DB_PASSWORD', 'AaNTs0UKIW' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'M2nbc;8$0ir-t{-9c^5,Y0G.#yk-Rb9xGdgp<]TH =+]|@ZfS[w.|]K:Hp,]4,_1' );
define( 'SECURE_AUTH_KEY',   'fwqkajJz&VBlP8:<_dDKp}>+Q[(v:26a/t6IdybC:5X?604;9ZAl0_Cgs`K3fv<W' );
define( 'LOGGED_IN_KEY',     '5ih|tf0dy@.5JU/LKU4qB2J&8[?h?6#HPghi:ulZ6)A3-YaaSk{utHZy>M!F*A<[' );
define( 'NONCE_KEY',         'N,iVD/~c5nU$z[_{QGK3qe/Cn2;Qf$%3{]rh<G]?(41/yY-?d-KQJKTt)nYVhNP=' );
define( 'AUTH_SALT',         'FBQz%_&)pMEW/VrJwE1f6 jbCR LaGEZ3`[VFUbw2ZWTi@!;~ HF@U|pIvb4R3]R' );
define( 'SECURE_AUTH_SALT',  '1_;WRCl]6`S3*$Ruk]e.RRNVnhHEw^0(YpK8 @8gK%*IVdG>]~ui1f<CJw+))++~' );
define( 'LOGGED_IN_SALT',    'uyxhsd cIcO6OgtQ{6&9j~0^7#p.PteuKz@5xu!E:fJBar;^4B|*Ue]}a;Ov[IWz' );
define( 'NONCE_SALT',        'Q*ZxphRkKfFK*uk^tLT. w2 &1:PC&UBSJ SXB<SDwn>iwHufqf7)chJx0PhUBuO' );
define( 'WP_CACHE_KEY_SALT', '%ywjroog#s<I@*YgE#$EGk;ur507ls0>#oVr `_Oy<Zu~Js{t:b#85LjF_y&4,><' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '6227e65438965ddadd222af70d0e12b7' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
