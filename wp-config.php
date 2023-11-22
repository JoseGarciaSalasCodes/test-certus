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
define( 'DB_NAME', 'josesito' );

/** Database username */
define( 'DB_USER', 'josesito' );

/** Database password */
define( 'DB_PASSWORD', 'a11147190' );

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
define( 'AUTH_KEY',         ')W:;{w&sS.rvqH:`FLLtnaXqFr[HWV &cO-(7CwWKN~,Q(q:CbIsC]2a~v7y4jd|' );
define( 'SECURE_AUTH_KEY',  'tbqe :sj37/;}r}~Z$bS4.0L)H>Jo3aeF@BD|Yx]c>g2YM1ek2XY(ip?2lFt3ca$' );
define( 'LOGGED_IN_KEY',    ':N|2;<xd(-Mbajp(clU$!]z|1KXX;Rmj4c!,X8rI+Z%u{^VsKl$(29}BF7Q;6#*?' );
define( 'NONCE_KEY',        'V_%,MM!zfozw$UfHsFAls*^8Mn;po0PF9(5UnC8Y/v>%Y=lf4iG2}ixFZHK_GurY' );
define( 'AUTH_SALT',        '.;Tpa{*IY;7H%<5(&GB9{EcTP7)yth(dDz>=w6kC-F+;{tq)f5$I#<NM/=|vz~bO' );
define( 'SECURE_AUTH_SALT', '-)j^t7UEQY6k_L(}P/~e[+Qd@U)Wyy8B6;D1G2<bVWh~_T3 |d:M@c&.K^jB|g+,' );
define( 'LOGGED_IN_SALT',   'V`qQtjmPi{vq2/*%sL>! -dtQ->>K!Y2 eC4`{d5YH1B{ZtB+XY.)MCO;N0w7(Pr' );
define( 'NONCE_SALT',       '$E+af2TFiqT5#.E:-lUST+u<eQTg*0^dMzSA$>oOmo37-/*:Xe+$YL X)(*3?SJx' );

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
