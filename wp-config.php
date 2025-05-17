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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'greenlight_wp' );

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
define( 'AUTH_KEY',         '7PRTKGN(7$BcBHXT~PZ>J;AyTL6-TlOqChE45|i-Yw]%m[@CS`.COwH#r{Bkd2%+' );
define( 'SECURE_AUTH_KEY',  '%NSJpk3Ch$/4=%`>)K&EChcX/_Ow>!/QY nK.1!H=uU$eNtq);NsPW#(>[+I05e ' );
define( 'LOGGED_IN_KEY',    't!&ism/1j*w-z:Ofn==ru_ReVV|V6T%IMA8EpmV~o[x9`MQ~}N?5i|N{Qi%kZt;c' );
define( 'NONCE_KEY',        '}JJbr@T$HW!X_0[NB{_RRB<g#bM3ZcIYJaDG`!HdgmuYH;b669H,8P_I|J-9/)M7' );
define( 'AUTH_SALT',        'ASL5V=Do~L:r9lS|uGGwTWz=x*#La3dH3u)}[)Z)kv>Ot.)g3=!SIRZ0b:>o@6_C' );
define( 'SECURE_AUTH_SALT', 'WimUpc~-*J5W [.);i_&LHZE]eRu-rno:>gM7o=pNVN+KDVRD7^M^NB[3jyL^{wN' );
define( 'LOGGED_IN_SALT',   'YJP#u~V!uOvUDB;fM]|P=oW!*uEnn:.=u`y?))T0%h:6J97r3G^?=IG+)4IT[cAc' );
define( 'NONCE_SALT',       '}r!dN7[c$**<aQ$aMYYToNgJ^ :=9Y(: U `WnvJ8`A&uvP,3W|UY[iX6ydo6JPR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
