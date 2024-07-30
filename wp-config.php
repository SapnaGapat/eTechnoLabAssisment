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
define( 'DB_NAME', 'eTechnoLab' );

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
define( 'AUTH_KEY',         'xRRvt?5Kw9}HGP|j>dsFL4@31u>3,59}KLwGSy{Lu/ ~tQag2#@1}4k~J3i=Esqx' );
define( 'SECURE_AUTH_KEY',  '-vo A-z`wYc7dQ[Q,iaFf_C aR|{7/w/pAQI%<KfMX.BM/u_pq%0=E&dbGdUBq:<' );
define( 'LOGGED_IN_KEY',    'mG,S&p?|`BakMnQ[/Z*f(fj}:>n%Y6tQ*oso}DOh6>Pe!(tkcFvpBgOm(Y:}W^ Z' );
define( 'NONCE_KEY',        '2|cfhvV<|pa.JCg>0l?)N_O-0&LMG|v(QI&Mq#f+ ,tGK)Yz^cvFqi:uhWaOQ=;8' );
define( 'AUTH_SALT',        'mkZOOjSx]tR lG8IKtLm6>/x`zET=p-|sR1^B`lE4Ur4-Q+k$d/*5bNDO,`Sy_8:' );
define( 'SECURE_AUTH_SALT', '6QELMW0nPiaL?VGm@(7C&QGx7wEoF}s&Now>t*lPgZ}`BiiN)Vrs.CBE_@]?|cr>' );
define( 'LOGGED_IN_SALT',   ';} +W-YdH9*==;7s>cWw#,?5Z`Q5PZdX3f#I0IQ%$DU?T#`_uUe=>dK*%yCq5C)J' );
define( 'NONCE_SALT',       'rMq8s1*e}[@U/uw?3-)x~ozG W?= I~x{z#f^#^+((0N3Q&TwSz+d/d=M=zIB<V`' );

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
