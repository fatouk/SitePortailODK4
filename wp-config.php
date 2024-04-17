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
define( 'AUTH_KEY',          'qK_Pc!A|h//~$x//B=XuV/^2{46JMK~-h=.:EE1|N.8Kfges<-+qSmPlw15RBxQ4' );
define( 'SECURE_AUTH_KEY',   'UGweV{7`vT8o?)Wrw3k#w|e]~4r_<Y8&jXo.sU=ivOlmSq=mdn*+]^,AJ]1I118F' );
define( 'LOGGED_IN_KEY',     '2ePrEoFa.cG0$`.EFDpRWOm1Y;;9v]CoV7fo!S+7r{kbQR#Bz7c)K;v,Uu(}!BVf' );
define( 'NONCE_KEY',         'McK0:!$-O>kyF|RUxwQ/>~W@B7{A}fUGe^9ohLg>3Gc }6dRqwh7B<{n^F*4jOl@' );
define( 'AUTH_SALT',         '@[[tskTQ=,piEh>1$R$4YvJjszlq-cke~)C{DGX8l*g=47~svGoCZ`<sPBOlgbDR' );
define( 'SECURE_AUTH_SALT',  '@IoXvc/CWj87%=D9#N|R.C(/U]8*?TGw*#V&J7n(wI0HO2s#R*y`PabQjq){n{0K' );
define( 'LOGGED_IN_SALT',    'x]/~MbfS~guE[^f]TMF!B`vrc./Pz9?@@Y6r)pn+V67;iw|vK$@/<6N_L.dG(OwQ' );
define( 'NONCE_SALT',        'Xi}P]]%*S<*!1GcS vIJ7C0v-Oe70Lj>8{CZzO)+C7Euz},>TXFv0K01L;Ob%5_{' );
define( 'WP_CACHE_KEY_SALT', '=93@Wp)FBRtyie7M/rGh+*5{!3i$WWI][S?2*%}FKMMq{9LEhZ=adq>f <sN*}CO' );


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
