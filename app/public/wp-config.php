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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'in(lkZ;N_[`B^-tQZCQJC2v4>|v>IKt/!Bc1@|^4iz>xSe#{u>_p[>qv|d&R*]h+' );
define( 'SECURE_AUTH_KEY',   'PB*?J93Dd?s-z&^`{O$|c.4xdy315zc,=D]H3AUqzys{@n;T[1:(@9)(&!:gV[FO' );
define( 'LOGGED_IN_KEY',     'k[)Hqy1f7TS0gYFH%GT@P5 5KrDBjr_[XH;[^p-r?laLvDUD%n;wvDUx>66S$#01' );
define( 'NONCE_KEY',         'jc *35[Z%F%P/-vr:cs)9T2b.zlW/@_e4.Z`j2py8HuP5d[e%bt}IV4<d>pc7Tl5' );
define( 'AUTH_SALT',         'J]vlz$S-bU`LW_^u[C&$s ?`#ZFAAPM,:0#>dU/wBfD*N*QWMH.L4 .EKM[=I!Nq' );
define( 'SECURE_AUTH_SALT',  'zs.R*dSQ)?Zk[[?JkiL0X=y@CZoQ`K M;_c#[BuJXePWVB06<$S&:k {#Y*Kf?o~' );
define( 'LOGGED_IN_SALT',    'jUWY%c=?}fN=xKJ^SXt98!O~Q1FK>T~Li84@itYth^0mU(l/^0gty=;ER*-[LOCt' );
define( 'NONCE_SALT',        '4Q4W|cgP@D2Yb2,p^LPRpL6g><zTl8ePTWSO*n7=1I]QKS3I9jd^,)frPE)0il~z' );
define( 'WP_CACHE_KEY_SALT', '#i0qOB{%GoSL$nU}u{&Hig^7G{SCWPQW_.OLIm-_Q@vdjx7]vB$EO-_gIyq`vE8:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
