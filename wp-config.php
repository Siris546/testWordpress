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
define( 'DB_NAME', 'calisthencisDB' );

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
define( 'AUTH_KEY',         'T8M}Lqf/tzdR$w)9r`=-RUN$f_?7vN,H;$zGr`JJ44%H.lVR;lz-H(I-]/9Ys0|Q' );
define( 'SECURE_AUTH_KEY',  '|yfFSf%`;`LwqxU/*J5vC^R5yl^t|MMd.p@&!ZB@iuC(Xlk ]^jc@aLByya{%0a^' );
define( 'LOGGED_IN_KEY',    'yS)gE{e&X}JV>y,kz%b9s{R!kVMkYHjB4qsTKYSr;Pg,ure*^a98>[h7/#fM&??Y' );
define( 'NONCE_KEY',        'k@)xY(ijo5K_#rJB+m+KrO|_UrTi?uY1}p=.OoiC>zY[@dp&fD<<CovJUe>lOnAU' );
define( 'AUTH_SALT',        '-o!j_=+c ?P8z|Z;VPcBS07,OdlmC<G+[B@59lUQh^3%g.0J+UW5TI+=&jGxXpEZ' );
define( 'SECURE_AUTH_SALT', '}P}5X(0%9+SmYc}N2CG>j!A!-.A!<xY.x~egXQy;-wUVR2ma6(?{U}iz.}g?u;wB' );
define( 'LOGGED_IN_SALT',   '}qm?>m*=^f@%H|)Af>0fcq&21C6$3or@*5vd{_M+IZ~|R9PPH#.Z=zab(GK>aQ:p' );
define( 'NONCE_SALT',       'cH/Zd#!wY vJ#L9 unR[od(~>Z,I?^Jj7?QQ(x#<&U[v?I#H#5y=6x:XuX/tv%Kj' );

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
