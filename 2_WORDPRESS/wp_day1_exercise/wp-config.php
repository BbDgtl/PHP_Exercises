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
define( 'DB_NAME', 'wp_day1_assignment' );

/** MySQL database username */
define( 'DB_USER', 'wp_day1_assignment' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cifra21' );

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
define( 'AUTH_KEY',         '-Ttc7yfA47XbdveYQtrHfyh~Ua[ck giQ{fP%hMgiE@qEkcUo(Ci)MsNFQI%7su|' );
define( 'SECURE_AUTH_KEY',  '1O{Zz/wh+)kW  bB>c;0Z?Z7&SNvQC#P,E~C EpbzP*6!?/P|*uZ7mUs%uA|+bYl' );
define( 'LOGGED_IN_KEY',    '=y(lBQ{3V1JNqKlPsR=j(c{(UqhcpAJshT<|=cTb52{Ix[AkWnd-~T@n>DZCE*cI' );
define( 'NONCE_KEY',        'CZQ1S=Xz36[QBAR67{[wXu_5)8*bFKQHMVSkap|gt6_T452Gh:ah9>y=_u mp9Ei' );
define( 'AUTH_SALT',        '_-.XnE>w$:Gxf/{>f<Tv6imUT>``AZo|VoUWO_iZ~`0(;nS;1wFf$W1^n^5L%g-_' );
define( 'SECURE_AUTH_SALT', 'q(a26se}NFw|g$#aGQv%`AZq_;];*Nl,+~!#14WRPA(:v818D^$ag2`Ozx[Y8H)R' );
define( 'LOGGED_IN_SALT',   'M7dM8MKu6vthRt/r;OsJJ$hc/P&Y*![pvHDSuw@8O{1vSa*@qzZQ_SiOLF@ho_<g' );
define( 'NONCE_SALT',       '=o&&AY03}fu+NR`(+QYAff/`qex3<*F#$l0/O Vd g]I)vB<xHYiWR+z<unpr>a[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bbdgtl_';

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
