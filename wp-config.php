<?php
define('WP_CACHE', true); // Added by WP Rocket
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

define('WP_HOME', 'http://annamaes.ihearttraffic.ca');
define('WP_SITEURL', 'http://annamaes.ihearttraffic.ca');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iht_annamaes' );

/** MySQL database username */
define( 'DB_USER', 'annamaes' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xdwVDof9oukD' );

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
define( 'AUTH_KEY',         'meN5`|H9xlHvISYRxcI/]o G7xj[><f9/.YPS0/m  c$4tEqYLi,6 7 SZ|sp&b9' );
define( 'SECURE_AUTH_KEY',  '/><DMgz U{G;i ;V~@}SEErd7ehNPWN)C)xms0T3/5QL4~w,rO^*-~b(G/?P3i7*' );
define( 'LOGGED_IN_KEY',    '0sh8I=<m 5zLgO(o!;PAbA(81iKzcYw]-tf6^4%glR*{%S!u@C),h1QOhQ9e*o,(' );
define( 'NONCE_KEY',        '3>9u_h[=&)AWr#4_oFB2@u//9V}4$,O!8Y+{s_:n+}Vm mK=;batZ2IGd,88n^ 8' );
define( 'AUTH_SALT',        '_piZmEe*IQMNo|j}aO{~ms=V4TsXtn0f]4p1jDN%RV}aj89fq^;<Mvqc-?:PXg2L' );
define( 'SECURE_AUTH_SALT', 'Ona|U-N[TChQTSc{ Gr%6M4/*:Miu7i0>7@$c6G;bR|oru)tQFQ]VBz=CZ*7k_FP' );
define( 'LOGGED_IN_SALT',   'vA~vD,rW}mc .4~~%9YcF!|K!]$w<fd%CWknM}@btpV pZ*K{Fcsi$M#`(Iw0;{l' );
define( 'NONCE_SALT',       'i>vFsSFM+}upD!KWqn=p^Hn!#.eQN+B.=6L4OzO(.~a!LDJDP!+RfJn5y4j@8Pz`' );

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
