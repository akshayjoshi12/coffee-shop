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
define( 'DB_NAME', 'coffee_shop' );

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
define( 'AUTH_KEY',         'HFr8U|V:Ls@D$z[M!pPu*h_umdup!ry{z1h^5o#_c-35`oC]K>7B<Lu)c~;.(.p3' );
define( 'SECURE_AUTH_KEY',  ';!+mV$9@iP^uM9H?AWNuv(x|A8xTh|1OVP>,W.|$,i(/9;gg0Hd(;hYO:Chtu*Yc' );
define( 'LOGGED_IN_KEY',    'w3qZ*8&/YlGm02cmtBVXiz:<L,($Xxz<]pt%)WZRkNz%>8U#7G2ki/U`L:~x5!sy' );
define( 'NONCE_KEY',        '5!U^L8w&V|$W7cuc9zLL[-V_zI6m_#):xl||(NuCQ^J![#%H+nkZmHnz(u&-4,Rj' );
define( 'AUTH_SALT',        'ZW)ci5||0&HNFPITH:N0;pF@KJ-N`2JDLkW=.F(BPI,~T 1;I,DRzlkzkQ!srvy=' );
define( 'SECURE_AUTH_SALT', ':%LJ9&c|$o&E{;M&|ZGBqGmyYcIk`)fQTsr{mM_LxCgo=aI$4?yWN#SVK?=tz9s#' );
define( 'LOGGED_IN_SALT',   'C+(g9!:01}S?wOay2rdnxn`3Yc=YRI9$Gd.]YkbwZb^@d<B;A938min[*1H7%5$:' );
define( 'NONCE_SALT',       '[|Q7tB`k>P~3ntuWWOrvAbr$tmn`#e[sDa`l`z$ap8Ln}4esc^Qg!{Ro4{rY)&O<' );

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
