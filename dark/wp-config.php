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
define( 'DB_NAME', 'wp-dark-2019' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );
//e5cd6f519f782392793db66a3f545447cc7da85872c54d66

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
define( 'AUTH_KEY',         'ik7WTrR5`p]FdB>D|H%r?s7N.F7PD7Jz%wIc07B8tSZQoVoS;3EjUm/nE&0jF7G ' );
define( 'SECURE_AUTH_KEY',  'yGq4wiz(`sNZcbSMvq5otw&mVpXbClM#J$-:Mx3C|_*x|kM{uuS@4wA sb?J>Bs<' );
define( 'LOGGED_IN_KEY',    'ZYM]{9 DfTIJT-7^y?YY^0]$Wf|(64X6CHWPao|Vonf{Whm:O_!)IO&tRmqN&P.5' );
define( 'NONCE_KEY',        'jU3u}Uy=&xj_%6?JlkPL/YDGK^$g`l)v/[h>,slcAMcD)9j^AZhw&!sN+uIzI3mJ' );
define( 'AUTH_SALT',        '!L@?#{ET#)hBooj;xM|;Uf>SljDrx!>]6Iw>gFC9m/|03N mL|PE)gFQNSGOw{J;' );
define( 'SECURE_AUTH_SALT', 'NSo1LUIG_iIJ9v$NjRw#AvM((5DAR}toaGR!lfI$|W*T4QKn-wAI?nhyJw+HB,vD' );
define( 'LOGGED_IN_SALT',   'B|h`tbPz%)*}8F&vaF;Ty0)L35fbZJYP_+qHnVCV%)p9Dffy71Hf;`X)aELrcKgc' );
define( 'NONCE_SALT',       'Jb5^6`39?TLT?u!N[bw :S7Q<raZy,lnYbIFz5Nf+<DyAb?>};zG}f}n:ad`+[IF' );

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
