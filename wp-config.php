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
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'katya');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'UPLOADS', ''.'contenido' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6aID;-tz7,g+]@UX:#E_#0`X6tFAm=IDmM58Y[;cce?3UI(`U;|^5[?</2dXfW?H');
define('SECURE_AUTH_KEY',  'xx96rV5%3K9,n&fW>XJ/Mh0WO&>,.VW1~Y+i=1cXAcZU+)Niat^Q -^?TVO!].bz');
define('LOGGED_IN_KEY',    'wEbKIQ>obMw-XsXJ0Fr%pWK7fS|9<Se&G:=cR:~l?SF{G%z>p2NWn$i~ V66NG <');
define('NONCE_KEY',        'w:2yGw2U0Xp%f}qa!.yYh>Ae4:g4&ebzRoFM|*n&k^|%gG34GzM+fa,e<!RN,{zn');
define('AUTH_SALT',        '8r;[>4&H=kLe,p./8%f:kR[P4}Ey}!+:r]#Qr]/m(:LT=xG%ye8Pp{yU:%apQeb~');
define('SECURE_AUTH_SALT', 'D(sZQrG[gt06H&<!d}4h~RBb61LbjVp)y9Gd/WW^qHNik[1$#gwxJ*p)hp7v.g7|');
define('LOGGED_IN_SALT',   '=EUv{IfB~Zgun*1^y(T8Gwpg_/#`k3Rl7A=0@t=EC pOq3fFoOjP?IzfzyVza~?k');
define('NONCE_SALT',       '[S>o=yKz0[]`A6~EJ&j8H$9,OeF*!XJ}SrF=_qM.9ggD4}8>d7?A=I8w14N}IL g');

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

define('FS_METHOD','direct');
