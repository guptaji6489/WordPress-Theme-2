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
define( 'DB_NAME', 'wordpress-theme-2020(4)' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&[AJg!xEtgaFX)/nq=@>($5Fv`=g;z%!v=2Uc&Xx6 Pkhw@J(.e7UI *|`1)S%c0' );
define( 'SECURE_AUTH_KEY',  ' 49/g ;JDURt*|Z2Uh$_X3NWcp!7-1Mc+!.ir=2(xq SHFE8j4{jSUZ1vI5ceCdv' );
define( 'LOGGED_IN_KEY',    'Vzj2|8vbq=,{X$+Z;er6E?vl+ojGG<$~@jM.%}r#9^y;ka%h:0c^#-qqXNbvbv0+' );
define( 'NONCE_KEY',        'v*oOSd]d>&&16]kfJP4m1~A}3xA!4t/ ,r2D2a-B%n~=IQGaG8:jfzJ4VD]sXJZZ' );
define( 'AUTH_SALT',        'cWs`N<6GMFCs)3@l[Im2RVeujstHWyJSi 8=U8;okN@A]_oM3sR)+09yF)wq5H-m' );
define( 'SECURE_AUTH_SALT', '`u3#RnPBc0lfSA?inK!8.;HXp,|}1{e6jQwOFDR{yJNi~G}=B#Aw7nHEai@e~!_v' );
define( 'LOGGED_IN_SALT',   'jmxTMJ{vur8U2;s^HdXeBTurR0$>* g/0GjR6~[kF5Z&!H,STtbP)AXlT%q1Nnl(' );
define( 'NONCE_SALT',       'phLsQs-$%qj0Z/OydF/[XM_|QmD^v;*HoE6_6.(WnQ31gsH/z+N)N9mH*0S<75yr' );

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
