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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'my-secret-pw');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         '5?RrN|vRxy,v;RaHaNXC,Ux%@3wXgFIl=Mpsp]=+7ha[b;=8M%e)a2{yH-cm*/lq');
define('SECURE_AUTH_KEY',  '#iBK(f#@yES_,v-m{weQ2/v(+V.y%=ajJ_6yN%r[Ad*{dj.f,mFeui-sUKRq|3W7');
define('LOGGED_IN_KEY',    '+XgA5MLoXj#@MmbZ8C _,h^}e.1,6X0z1bqJd J?m#dn0q6Lo<x>zZ0m-=ycafyZ');
define('NONCE_KEY',        'G#k[/7lJ/$(<<,m4Mf-WJmP^_yya]OhLA~L!!4%[sXNxt;0*VI.:</ )DVGY0zAE');
define('AUTH_SALT',        'Qy]gVC:D@*g)NrFc9*@1e6Nhv?Eu/n;PKplWyUcb3;Iep4nI30F6ZFO|}3a.QAO.');
define('SECURE_AUTH_SALT', 'ua2pCXv]S}FC,#i2%2jA&(`txY>nvX1P79nC``O0Is( I&c<=?^^C39`jVT0Kp;Y');
define('LOGGED_IN_SALT',   'GwPDzzBb9r!k+2&a!RbS=$ei1I;>^WrGDXR[8OyEi-FjuWIaWi>dYT^oUpw`@!tY');
define('NONCE_SALT',       'NG8~DRU/zsiR$m,Y}t5Nt7f70{*IfqxxWyjV!*xl[8=/ki@TA/F9k4$$3AMW!!hY');

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
