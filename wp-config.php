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
define( 'DB_NAME', 'wordpressportfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'lIX<dR:3bDI#@P0#I*TG)t dn_ULBU0r!LhVM.,@oL!5DaUXFH+COg)_Tr..t}Wx' );
define( 'SECURE_AUTH_KEY',  'bf8;+MX:qB1.ar-61X8tBrP,W[e?4t5?5uLlZgTMNZlJ>}TmN6LPlZosEGVg0D/S' );
define( 'LOGGED_IN_KEY',    'T:-^vtD[IlorFH[z0Aq@<^+Z%V^k9*L#B&6OyNhpu&=@1o!fzs#Om*AD4fDvakn]' );
define( 'NONCE_KEY',        'E`0m}$qw.bv6ZqH=k;>TS2 nu#xt7TV-I#N!y,a)f?&G]0 :O-I^NT|rPC}evkb1' );
define( 'AUTH_SALT',        'A*%i;W$n%^-~div:?s_VkFd]zx+PO7-g?`:0.uhnvF]=6UCT;C.qk#8M~gzUvv{S' );
define( 'SECURE_AUTH_SALT', '1MmjEJ[,XX<[}0 9XZ?|KPh}ggC-+SAh9FL@Csa]EH9|}Ol@gViMjr)DlbiGd)sf' );
define( 'LOGGED_IN_SALT',   'fe@IA,ANsCc;bEWQKl>S5@(Ce;hi/&FV,%:ZR0Ew:=OHG(__QTTL:>Nf1_B|#_,r' );
define( 'NONCE_SALT',       'I5;HoXc8G.E1&x.-oZh>`(dJq`0-;+H6nr[QDi|JM0g*UCpSb}{/{X1I=PC4)2Ru' );

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
