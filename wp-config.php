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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin_assignment' );

/** MySQL database username */
define( 'DB_USER', 'admin_sayani' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lOVq3isvHK' );

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
define( 'AUTH_KEY',         '_LL]V=vsz$H}pU(r3N.0jWY&&BP@gB/bBd=4; e6Q6M;Y]Q%v4P0AXYfi|(LY,o~' );
define( 'SECURE_AUTH_KEY',  '8[O`N!4@%C>vmXo}J._T&M^ooV:WQJ_s4YC2V>Fu8H;q1WuEqit,)W%A05C[8QyU' );
define( 'LOGGED_IN_KEY',    'G|1 H`Gy$>%*?GQuj+i{wZC(pB84,F)etGh9?lD8MiuFbxBT{l|byjVVLG_~]DN;' );
define( 'NONCE_KEY',        'QvmKIf5vN*!cBrWI!d<6OXP*op8Om3rT|Tr[?iod9<u1n0#J.%xxa%L-P<NWV}]m' );
define( 'AUTH_SALT',        'C+ep1wxuxvkYFoB-H]Q{rih2k`P:jW +pEi;p&Y&$|QP5)PuUSLeIOnb$|Gdur(v' );
define( 'SECURE_AUTH_SALT', 'us[7.t]908Q?(!e{i9(2/]W|(}.C{$4XF).?rtBS$3o=ID 4|- Pg`b`hgzZ*3&r' );
define( 'LOGGED_IN_SALT',   'H;T,9ellqJS7Je_,?FRT-4+0Tjn5o,)Q^jaBf$_DB0on&?vmkA|C:A(V5hNslfA=' );
define( 'NONCE_SALT',       't,cthBf4rLt1m(#w>DCJ~eNeEkN*Mfb:{kmaMW2cmd>=iS.l1D,)(Kcw{%Z+Bn)1' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
