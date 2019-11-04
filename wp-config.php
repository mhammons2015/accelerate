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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'accelerate' );

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
define( 'AUTH_KEY',         '/9KgbRoa,J<fEmG>3sMtBde+g=6WeI[Iu?Q.XnpzQB(yZD:I8}fVdk|Q-?G{.#-J' );
define( 'SECURE_AUTH_KEY',  'r-n#iuSxQuKY*~EIQa1bx=08!,P)4.R`}D>X:sC oa1AWu.F!3CN3i::qbwedst4' );
define( 'LOGGED_IN_KEY',    '}D;XxsC.TuM!YT-.;lWcYzoR!JoKY/3bq sv.=lP)W?x?cype^6F!N;1,LHu.kJZ' );
define( 'NONCE_KEY',        '$g5x]!u7~XH>UGg6JM|`t[y5mFep|.?aB9x4|^)RJ2{DT}T*bC/B-WkQ83{_,gT7' );
define( 'AUTH_SALT',        '>h>L62_h.b:.Vh[`I+vPkj$uE$/iDji.pjkemLB/HVh~^e-+{bcMVEr2,Hj]Qx}&' );
define( 'SECURE_AUTH_SALT', '*J>%>65_.+K@q[:c9)l?^vV{m1k-osxGO&k;D,zEr*2aa/Zjk11${`:-]g&7j;hT' );
define( 'LOGGED_IN_SALT',   '%,j7e2p3%j?p)6HK!${+uwm}[aE*g ff*Ln7v3h/Xw#~6hPfkzXcP:lv/B;G04->' );
define( 'NONCE_SALT',       'X%:nfH6J6E77+%PwBR2XPU/4Zt::2a^mNG@S7 )g#!h7Z;d/fJA<-SoiX8Tu90bT' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
