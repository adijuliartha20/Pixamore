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
define('DB_NAME', 'pixamore');

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

define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c?AKhSuePaYAY{_y[ouInGVG@K4NQ#nE@+HS;qbYXF)m:IfA(Q8%$WpNQWNI0>$R');
define('SECURE_AUTH_KEY',  'a}phHiy7psZ^Ns)WO7v^Cu)zh3nv7q.rWdqVSGc<mVhNH/~+MN#@`9aqCI^.E+,A');
define('LOGGED_IN_KEY',    'I^ZWX|6HWe2H^H51.Y<@`u36*5B1f_4l1[x+-oHCd^@jsike`%>jUT,dEA[aBx}+');
define('NONCE_KEY',        'Zvd|8UD[QF6>_0vU@57s;1&T3x4]}fQ%_tou/8<yD+YQWFK&D^JZ>8 2D jNh%.]');
define('AUTH_SALT',        '.oF35;S1rKu%LfTtbAx+IlWo#kj_@,_[dBlO6/0/tp#x1sx:`-tg#&SnzlNS~maq');
define('SECURE_AUTH_SALT', 'XTF1!])+z|hGq2bJB&]ylN>f|19n=;{;{tU.1`*4VGY1KMt!RTq-?<ZEwF*g-9EZ');
define('LOGGED_IN_SALT',   'g]:Vlo9Wo;Oka<uHZIUK!chGJ:DUH@5zQJ`0-S6V#l$+h Q_a`qsp70VZWvhxqiz');
define('NONCE_SALT',       '2B9G9PeSC^4?tRnAJe<EdmYF)63U?!J=)iTRAH& <I;VX!|aWDm[#Kep|7tY`f+9');

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
