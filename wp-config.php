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
define( 'DB_NAME', 'mi-sitio' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '6cfc7890cc1966b099b2d20416ae2827a174cd42fbe441be' );

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
define( 'AUTH_KEY',         'z[=p^zNJ:ODc=p9s5vPIM|ocjlY#Z5&6!1Z&:&WX7.{h;Os .3l.hdSD:D~=+K5)' );
define( 'SECURE_AUTH_KEY',  't=EzAzLSc)# (X<26hQ>ix|IgT#iQqMyB)CPq[]G;1f&gp4Z1z&VqH}omNqpC O/' );
define( 'LOGGED_IN_KEY',    'D3Lh>$V>[ML[#!%#6QSZ}riEe75N*e?S,%?Hdn4MZT$#(v:<IR8K]+lPS5OOF1KA' );
define( 'NONCE_KEY',        'g,I]=X=.G=V)u[_Ab~|b6Y4(Kq,`8ho7+!0% ZyRWlP0mtT<jw0>W^]J4Jg 67|p' );
define( 'AUTH_SALT',        'BwM5G9YZ~:;Hb_K}sX&N>{9};03&W&tZ2=Z.`N+J)8*3 W*ePh58,#XMH1>RB1%+' );
define( 'SECURE_AUTH_SALT', 'h_3EAM/J*?R2S]gW;+7VW;ytDHVci!genQ%v>S_I0$K4!j? v,RDCLg1;A`/FhD*' );
define( 'LOGGED_IN_SALT',   'As|$mx9Rh3:,vXZ_H%etPCA>XFBd4s{>UN&vaaC?,fm8<iHpkIsImXfxFl!Md+NO' );
define( 'NONCE_SALT',       'W1Arc`*8cwo8z26;pD}<rrRi,7! uV}=H[VYI$ayP>cK8M}rXy?[J.#3EAc|P4uu' );

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
