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
define('DB_NAME', 'distant_server');

/** MySQL database username */
define('DB_USER', 'distant_server');

/** MySQL database password */
define('DB_PASSWORD', 'cifra21');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|_<e*>7+v~WIuovc2_F;qE4/!crsV)t(/T1(@o|4ZAot&O*AsQCDaYsRZ_}sd,<g');
define('SECURE_AUTH_KEY',  '_f2$IU?)J&p{a)91}E4=XcDPg^9S!zNd7fwQkcV+4EmwTW^hsP`gByIJe&! _pM$');
define('LOGGED_IN_KEY',    '@:N$44C^6L9Jp~NA,>1Q,Z=T0Y0QQg<5I4RH:uO_yz4]~_:kCc1S^l#;R9HD&dFt');
define('NONCE_KEY',        'R81*gPzw:|9HZm?qy! lBjkCTb#tgBN7_P+5f6VGKr&$v*/cMf=O0T<*BXQ0_cm+');
define('AUTH_SALT',        'vtBxdY!jpd2]](j,8p2_aREVgux?htWO$G(7*$8qf*X=c^*bi9W3yyuw`+ivrYSg');
define('SECURE_AUTH_SALT', '(M]T{|fWQ1<b(KaS~5s]COh&/]94p& T_tJ6m0)XDf2x=4ERSD!}%l-}K$lm0SG{');
define('LOGGED_IN_SALT',   'VgCxp%MBZcX r;:4xIGMd0Wu[u|aC#]E{(lG&_*LRpge/dwjp-0pd7QJ4[?1trj9');
define('NONCE_SALT',       '(<KCOqJ%sE?}2A|Q^V|*SV& OA|v{~9iX()3fS~haHW;?G1]iJEO33h iYytY^/.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xyz_';

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
define('WP_DEBUG', false);
define('WP_POST_REVISIONS', 6);
define('WP_MEMORY_LIMIT', '128M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);