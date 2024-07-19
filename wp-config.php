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
define( 'DB_NAME', 'blogwebsite' );

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
define( 'AUTH_KEY',         '2Ra.pc0Tx+7iJ[[0:&BK4KUIMamE!BSDJ,9*C<,C)vFncwfC:$Ki6:U2L]b8o.!o' );
define( 'SECURE_AUTH_KEY',  'FIeda%O-AvKYKv>EZaTDNZ6IO)bLoZ_!s|)MGD|>=^0q!5#}1Kh*a0t?.q5Lq![^' );
define( 'LOGGED_IN_KEY',    'LI*l%5-r2u|V:J@u:mEdy&o9Kj6SO<sZ0oB$zBe(nVAD(bF|i=+|?1X=p?yh05YU' );
define( 'NONCE_KEY',        'riA#oiI>&0.XIZmGAst*{Q2(+[AWY5$9i9B*{c:^%Fr)Q4K!n/Gaqs=}.ac_:iY&' );
define( 'AUTH_SALT',        'Li*bXJ%.|/EWj%l-pw$~ZVXY8q=>IQ7d6rke%gw8hYU5~Qo{M0K6JcR3r$+;.#Oz' );
define( 'SECURE_AUTH_SALT', 'Z:TSh0qywRO#K2-gNf=rt3X )tRsoA+~&%Nob5-|)h|zV~)Hx%9AM49~>65GY<yf' );
define( 'LOGGED_IN_SALT',   'WVkYy]m=c/;0H cp#/em-ZK$(7(Z8:xuk5&j7Psn {a>>xjsK<T=Ce4>YmL-y-*$' );
define( 'NONCE_SALT',       'E4S6.cc7f[#n.*M34o5oBQ_WqJG^d){hIdR=un7nWnF_BljFyvGrt%ELq`HZxDPX' );

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
