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
define('DB_NAME', 'houses');

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
define('AUTH_KEY',         'YZxL;TnS#EKc=GKvR^g#r>7[nSg.w2^<%s7+!Es3.8[Tw7p;AcT;px`uF6F(kBSw');
define('SECURE_AUTH_KEY',  'u/(R-4P_2&k}8Ug?b)9bJgHrIgHm $rI!6)}>_|0<$=|k(-6jFIX-#!o]mP9g0iE');
define('LOGGED_IN_KEY',    'kCsha~[B%**m&&!$]aR-CdAFa9yrMz7y+=e-lKe*fhVJd!.G$j.Sm+tyip:7@Z+p');
define('NONCE_KEY',        '45(byd F0Ola6|^VRsauDVq;NaY6yJLCzSx9Ry#=wDy-O2eiz3kAC0+gMMg?23aW');
define('AUTH_SALT',        'fj]|7yR<.MRo;sg{d+Yu@}u>&ni^M&U+6T:$h!=!m_8i@*G-{#$0s_wF*>`CGzN6');
define('SECURE_AUTH_SALT', 'm/W1T3!cQH?V@}*10hX9X!Ie8njlu.VO|ThZ%~D8T-_OWEQ|>Dka6NQ-ZuqEM)R.');
define('LOGGED_IN_SALT',   'L_`[nA0qEytvQbOPqIEVH.KYt{AV :DCk~[B&.c<<N8e&|#!Trg5~zw/jdvh5 >{');
define('NONCE_SALT',       'Wm>>|q5+.*;+t5S5`k+F!9~[}[VNv[htG?[PBb&f)Li*LliT7r D^596HKa6|C9X');

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
