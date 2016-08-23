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
define('DB_NAME', 'dontcallitfrisco');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'TcI9mxxjFkbi|&_)TMx6:gCBi31*vn;BKOwZ@j>Jq?nUXJFli!GCW3Vd{+TDfY/e');
define('SECURE_AUTH_KEY',  '*2ifpOuVSvsW1hS:@(Yo qlf2 M&&qeD[U/AMRzzGdsbn]yZ}R79N4YnxWQQ[dpv');
define('LOGGED_IN_KEY',    '.b 4*;Aw]~exIMZIFZv e1gPV{jNP:H36TRE?Y%,]~zoREY,S5gZ9O4BG2+D=wiB');
define('NONCE_KEY',        'm2axl~^Tb{IaMc%#z+772oFvj(E{DJ;-9Z(=67/gt2=KMAlhB17yQFIg!,nrPO$H');
define('AUTH_SALT',        '1yj<Ltr|V>VxP`L/@G8`3}SGb|tltOW?#O<1GHdR?~M0(nGaT3/t)(^nhT560giq');
define('SECURE_AUTH_SALT', '8zC8A5U^P!jl+5(4hFE0nC%>GzC }5SEZqc`WxgiU(zqm;ijyZ9Yg=#-rNa5$O!}');
define('LOGGED_IN_SALT',   'Sg?/j4{.p 5G7av]c<BP`B.i3.AF>!aqb[r`JxND=,ebv_QbE]A0iXJj lw94Y7$');
define('NONCE_SALT',       'Q;)(UHJ5;0rk,5kvpGO(y=h}_G<8PwCNhFA6PtJz5;us ndMu0FJ6LQpxE;FV~(*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
