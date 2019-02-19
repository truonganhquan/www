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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Y+I~7gyX5WQq9ee_fIwX(Rsn(3Rfe22w+^BKLVq[Wcd:T)Rll%hPP:SEX72Ecc%,');
define('SECURE_AUTH_KEY',  'rcr.L`4UM^t5Yn`nM{1{;wh?@ @hZE](}.,~M<mO5+.q*YWYbq/yk&kOxA5nh-c4');
define('LOGGED_IN_KEY',    'v8~7[~.J[WNz2HJ 6Zmyq$BpIobBd&0Gx^Yb[AuxA~j-e?ZSpHNhO)2Jt%ikE~A@');
define('NONCE_KEY',        'G?8f@$.N8p&z}c+Kh]Je@;F-6X`mC+.>8_J3bdUbDT_FoHh|S{3G$XR9G-WtY| V');
define('AUTH_SALT',        'ssK_w?RT)OxemYAOVpWx-WW_=?]B0 `-=X=-/`JkCgQtik&6~PJvGPRsJz~(jx4n');
define('SECURE_AUTH_SALT', '::u.gJBC#E>]>-GA^qY|Y+1;V |JJEne@v^nw5YuQx(1ArS[-DvC|{JD/aIgrYkm');
define('LOGGED_IN_SALT',   '+M?E~ATjy+} bu+|eZu5<+h3<M^IP_PnJ~ RyxJSu1vr|Q8 qTh:{{<8^%.jvH=]');
define('NONCE_SALT',       'U|||^L}h[HAI9@#y=tsiIar$:4@>B}[*}Hq0+._$Um]xc:kh|@33:u=R)O6bJI*k');

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
