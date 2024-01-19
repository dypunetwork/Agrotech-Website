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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'x*vXvg5N(P[}v<3&oy@hG/eL_3U94Pj=4sQVEPDmU!f`#Z.TwhG7Fd[e2,5SWS<@' );
define( 'SECURE_AUTH_KEY',  '~9mViAP@m^_tEjM+*l^=)8*Qm5`!hi4.WymtC(Y%w4xCTgyQZ[ rQ-9BNdB.gM2:' );
define( 'LOGGED_IN_KEY',    '#p^Nq1!z~PeRBiS*fAYR]Q`3,#f9?k@LV=uLNq]2.zKxyok/XkLcv!BZdO-mnorr' );
define( 'NONCE_KEY',        'R!IHfoO*0[eB=sn`zmKk2l;vO}bw<9GLuywjZ5?/ia~m*W5Z),GT:u]41oM=R[L)' );
define( 'AUTH_SALT',        'em%Es*/a$zMZ7;PWwrWB^L}_q.39)[r8#_d+-UL`hVc{fYpWH)ZJG]MEZeHYT Dc' );
define( 'SECURE_AUTH_SALT', '=CIz%aw3z*ElPc@=;nTqG)p^RGI!ur,~!}Ibte?4qJ2_Jb&zE3PY}l%?4n^^cIdJ' );
define( 'LOGGED_IN_SALT',   'm|uwa&M<`<j<WV]oDntjE v&ekdThvnXm+*^+U[&-@mse4|XoAgG6>)nQq~=/}Xm' );
define( 'NONCE_SALT',       'v_j]ZaTO!v@`9Sxd>7ALr[krDUqz45_tnY-3nMXD9tB8^xqZtaO|d0d<0b2p{8wV' );

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
