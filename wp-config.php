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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '06oz9ix-@`3~]j2CQ,[=Cfnvv+/$[:>(+eG{w*J9uXK} Sx_*1rc:q_>Yu=`Wm]%' );
define( 'SECURE_AUTH_KEY',  '7oO#XjPjm5)R[HEQL6qY)a]1B0GpIwlqHaijgIfx<@f*U%=CxO_!85VpE%]e_4,a' );
define( 'LOGGED_IN_KEY',    'K-x>f<+3r1Xg{GBA$$D<I5sgx=:IU-(Uap2j0mh*_KC8M~bl.M[Dl1.Q3%K+SzOO' );
define( 'NONCE_KEY',        'c2p-0Sia cM;pK>&#Pr=O5?,W;s*eqkrbH%_V busxb^B]QBA<dY8s]KvmBT4k5q' );
define( 'AUTH_SALT',        'j(){XEvU8xIa[Nj2+&#6~3?C9f0|(qs/`@TYk(m}BaC7AX9]e,$zC@r%`F/zF=h2' );
define( 'SECURE_AUTH_SALT', 'GSwmZLHaMIAaT1_q:2J4olE)yetz!L@&}0MvS82D:Ik6v^-LJ_R$ZC-C:L|~nQQ)' );
define( 'LOGGED_IN_SALT',   'Uk|PI7Nq<!i6V,Lk*{bMk@FnkR,#D?el(NnZZ,T/}xWy]>4 sGBN?fde[XN$;![f' );
define( 'NONCE_SALT',       'nQM A%k;hF#I^AJVjZM<GC(tYS^n9JK!12X!R*`~HJ<O%Hb|b>)5Sz(5KB^mc`g&' );

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
