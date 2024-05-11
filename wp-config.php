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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Wordpressdb' );

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
define( 'AUTH_KEY',         'CGL<:Nc=78CuXv7+Zuvf|73IAm;^73cv3@!51Qo//Nl0}38!e<Cq% 41imcGlCxN' );
define( 'SECURE_AUTH_KEY',  '1XjN!D[3+)}H/g#MD*]V59@@upJ~)3dT$OWs65lZGa?hF958]5Zp*_jWNwi[&xtS' );
define( 'LOGGED_IN_KEY',    '2=H~ Ic_-_T`r}3z|&SuuzX tG5N%SmcP>s.Qjis YkDo@9?OW(|D}8GmtZ $JI+' );
define( 'NONCE_KEY',        'ixyAiL0|cc&6slOXp2o0!_wj$W~3F^BnMhFk$M0w|^$T3kM|cX}K3UW-)2FO&Mba' );
define( 'AUTH_SALT',        '4Urzn]K@[ZA,cPf3O._Y^ugTwCKGQ@!G[wf7Y&&cko:o+j2xq HT 77AWF*c|lq*' );
define( 'SECURE_AUTH_SALT', '<OVQeD<fu<Cx?U#[Hse;FQ*q.?W2(H!$QqKIl`jV5@m#]{(@b_KRc^dnZj^Ru+WE' );
define( 'LOGGED_IN_SALT',   '^|AS%3N4~~;jIhom*Ek90:w%}{VrrcX[;`NKfpx#1U,U%}?eoiGQ*yvCPN/N;P)/' );
define( 'NONCE_SALT',       'P3:O3i*eiMgW+]zF>F4v0i@Xc6#`_jb}O 7*FZpIH$FZoc_XDtav3ZAb*,U1?8_L' );

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
