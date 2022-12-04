<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *test update
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
define( 'DB_NAME', 'fourth_project' );

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
define( 'AUTH_KEY',         ' Kk.pZAOJwwkP%3ZdOdY>L~G5(,mc-Vv`WGcNsE b[OKYGJKkC_5i5CCxTt$c^#Y' );
define( 'SECURE_AUTH_KEY',  'zvuO7WTV]A%pofFRN${#(=J+B)C?ovtobiY;ZNkDBX_6V*-|)Wr(i|l]9Ie1v@_f' );
define( 'LOGGED_IN_KEY',    'LtkZSR7$6FO6y0;DY;!Bxck].8Jei+fe0~@@hg%H9(6x$Hr@VU:*gC*$*RdN{0_F' );
define( 'NONCE_KEY',        'wsv$-20`kH`>uDyEf?Yx<w_{#u9(5lXz-P&2?K&|L_U-{0+^|l7u+57s>687h^O!' );
define( 'AUTH_SALT',        '{RbE/[,<AzBZ>Qm/KeC{c:/;rwcgv;e~Lu0TmAzu2.,B6rMt0gNzNhbq(3>/jsMi' );
define( 'SECURE_AUTH_SALT', 'nk`vimLEb]6T[aGL?vNMm!Ir.$9mq4nMn@ s/-OaO-1<X>WhY0(5TL%@Vhi y*I^' );
define( 'LOGGED_IN_SALT',   'lc2eRG9(ad?*~^S0a3:z9bVO?I(&O}9 Iaaw<{[y7TN`-a3!R+YUcq5a?D>GYD,H' );
define( 'NONCE_SALT',       'WPPUeK6M_i2dsO3g/jEv6v^6USKf_8N`wKZh!j:J+35j#1Q@vH1yVcx]|pa*Xa5{' );

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
