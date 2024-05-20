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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'not-so-secure' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',         'U.{jMe5{1V{Tp`.DSm3,.WJ)|E3ZDoNST,6^;OS7Bq1I:ya @oRfW$pdM+~n}F|w' );
define( 'SECURE_AUTH_KEY',  'kG>ixJT@TI!RkKNftZA5H5,Z.t5Z,4(UeTDuGb/|-!Aa-cEKe(FZOl 4>Aba0v}!' );
define( 'LOGGED_IN_KEY',    ' NH2D!n+%e.8vySu~894nPZ,#Aw`D]k}GG}X2h/wdB)T4fke!PtYzJ?] cKzW8]Y' );
define( 'NONCE_KEY',        'LR S1(x@cZq7&U&IKog{CX<gHW)}LH@:cm3}xzzF1{<maY$,2VPV;|)q_K(npo|W' );
define( 'AUTH_SALT',        'RLNa^ al$@hm^l [m4C1y^hS1+#b[0E4OIR1:(@{:a&ezID5TpWJu1M+>~`/@y &' );
define( 'SECURE_AUTH_SALT', 'C1$FcwVhM4e<ZZ~>,:Oq`l)cge_ej:Zp_[lL~11tf]}#Tk@MIP<5$1Ny3p3T8IlV' );
define( 'LOGGED_IN_SALT',   'QPt8j?m0~7=h6W5ut1MUu!<YU~B}]~Khk5!dmK#weydw=RNNl_[g<x[k!WeK3:77' );
define( 'NONCE_SALT',       'XCB*I$vwsc35LbX>^kVeOj3kgveoElbN=7tCOOg)|oJ/vB<ImX[qv7c;GvGf9(WG' );

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
