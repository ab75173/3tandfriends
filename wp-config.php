<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '3tandfriends');

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
define('AUTH_KEY',         'A!C_~^>VyeQEk)GCGsd |`7Ri<v1zQ3eTf[6~~_rWeM1ROcoOznp>x%Q@NjTnWo ');
define('SECURE_AUTH_KEY',  'D;[hKVQ}l]q[R{b[PV!?>)`E[Q6]Y+v+YD>!)(&eB=1UBB*:Lm`,N+0ywW#GD0nK');
define('LOGGED_IN_KEY',    '`]T0F{,DL+iWxs7mQipIIZ;kbcasn:~b1b+@UjcMB+3=^JE5lT_BOO3Q}}IaT|d ');
define('NONCE_KEY',        'eKa%p=SotNnPbZQ:AEH}n/p^!ej-dbsV^v0_7]0{%E;})cjKbT)46E#QrhsQC+we');
define('AUTH_SALT',        'h4%~+u,_fZeY{L43o@Sp+i.E:MPEe9wqSW3S`6_PP !i-eG=~t}c4K.N~+b+~Hh<');
define('SECURE_AUTH_SALT', '`<z:M)k0wtq04*5&4[y!o:Gx-i*)h+$5:}4^hMx3p$X7Af@`CoSht;p(2XNe|xc7');
define('LOGGED_IN_SALT',   '{(Voz`I<:<F4wA,1p~84^5hL1j)2/d-Ghk5c86-#nr?l{A[$8H[.-TF*,f}RphH<');
define('NONCE_SALT',       'a{ru2ezNY4j*xGeU-p@9@9d558O(`2}|#w+b&3!pS9%-c^C6j8F0jXW;M{~z>pFc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
