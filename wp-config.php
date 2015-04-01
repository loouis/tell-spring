<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tell_spring');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$y_pz)+M*:ZA(5,_&)TV}3#sdGI06M07g<fn9|oBQa0S@ARTjq@iaMr/|y?0Q|rL');
define('SECURE_AUTH_KEY',  's+Ef^B/<W]+&ZOl.PGL?($T=f)g P1U-FTLC6!45%Fmjd4+5pu D*SI&,</U[a!k');
define('LOGGED_IN_KEY',    'Qf2aEd54H4`*pON^+?*+_v)C=V]%M5KtY<]:F0{-m{|OlOF(KSq#`yH0+vRNx@aB');
define('NONCE_KEY',        '5+WKO>=A1%)x9LuMkH#%:w`4-h[f~9tj5;pd<u*ER lxe.,$#OW7oT 3Dq&,>0m6');
define('AUTH_SALT',        '|E.B[5JGaddxYU_}J(>4h/X`<&~,w KgqRr-af;2iMa~,Zq!s7?4{F:uheA|ZCLF');
define('SECURE_AUTH_SALT', 'wkRp,ro9Q)ON;WS`F+j6Az[(3`<!;}f<!S-DEUI9@*PqR%I>nvxb^Ra}Z{L|%D%F');
define('LOGGED_IN_SALT',   'CM-uNk|A +*b.J30&m&KrmuxH:OV{.A/46:i.q DyO%}fER-E}xc1`iiXO0DO1>=');
define('NONCE_SALT',       'Q*rTuGgNgs%`AMB![HA`&_1+eL=C<f {jN7JAIXYe%wkmhS>2Ll/KM]?SO c=e|X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
