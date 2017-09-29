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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b&&`QS)<4&Xuw]_1UYSdH44Xs9%L2uN/H,.<4@CH60mpbx:$_/;WkQ`N=@h)>-$ ');
define('SECURE_AUTH_KEY',  'Q 3R ?0CB~jNHk|R#=2Nw7`ucfD$Ti$u: FbJ;bI/?;D<p*LC7XR4nkD-J*=L*]P');
define('LOGGED_IN_KEY',    'FCF|~noSw8#~;u<vj%qTBt9*K`3))^`KP)4luioZE!f>1j`y,<%RtG@!26R7Oc>~');
define('NONCE_KEY',        '[[v0G*b68|>Mwr V#gtxC Q2>ZBk2dNCRf&k6C5X_#n}(l!44X6?Sxkb3f!oQYQy');
define('AUTH_SALT',        '@8=&)?g<CtOJt0qLd$FKAV>R~4L=$Couwbdr>iUkgKJuw4^)2Bd-=!;t/m3AVmk+');
define('SECURE_AUTH_SALT', 'jQ3nB_RsTM9-/WJo8Xd}Yj1c`H3s+?yu@T2|qF?QAF#4f0F~RFc&<89M&tMZxU?$');
define('LOGGED_IN_SALT',   'sqd=s]J(U(Ci,i~-H+6: EW95~Gl135+1Aeu{ZNUl@iQ<?~WlkRp%0`!@6a76$EJ');
define('NONCE_SALT',       'Eykc]Gxg]0k!n@gk^{!qHY3Eu{@Bvpz?y[Nq8f.JQ 1/>)Jd!tNWGoKvTn6i~CMR');

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
