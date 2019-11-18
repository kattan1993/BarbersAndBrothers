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
define( 'DB_NAME', 'inventionwaredb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}X`PlifTLJ1~3<wMBFgzu+#+~!<x&][]j`ro} iV@zll&&=(E>>[!OS78pd4S%Z[' );
define( 'SECURE_AUTH_KEY',  'sqI{yUFO ):DO5)w3++[5IV($<.~gMS/HL(@Tg{0jy%L({LIH=*~9#UM`ygqv#5@' );
define( 'LOGGED_IN_KEY',    'waGUgPR{@$K1eJA:rZm3:^G;Z4Ge=x_^QOv[6w2jDl*ylHRltqw{2>E{QS%4G*-6' );
define( 'NONCE_KEY',        '`8r+JoM.Gr%l`ERBpqLS3B#xdvk,2.8JiR;/EVh~!ee>GBlphu(zIuoVR3`B}gF,' );
define( 'AUTH_SALT',        'ifRyn|d65,PO`5(Ve7i[CC7BA4fV(VC{#aY,jB(m5gh~V@75IP0E<(O ?9ODw,FV' );
define( 'SECURE_AUTH_SALT', 'SM|6J:e:a^1-,*(qGJjJq@5OmCeO=ke>hm&NSCltHv`1TwO+kp)k-U~ice}*hQ6c' );
define( 'LOGGED_IN_SALT',   'DrVV`q.lSYK.?fX6>a{|dT33W;p?u2?627ekx3V|`omNY(X/kC+@kHthQOnQx&0M' );
define( 'NONCE_SALT',       'U[Ic9MVYduw@%zRe+be9(<vbcrcZAfLD(33OnToKA4d`wdKM&-P@UuqeZr:x-&=Q' );

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
