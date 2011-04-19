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
define('DB_NAME', 'leonarda');

/** MySQL database username */
define('DB_USER', 'cecila');

/** MySQL database password */
define('DB_PASSWORD', 'PoIlYAH6');

/** MySQL hostname */
define('DB_HOST', 'localhost:/tmp/mysql/leonarda.sock');

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
define('AUTH_KEY',         '^cQeC;b$5uoK|Tzh{d*+e+STH5J}w2Jg;PMgV+Q/M5=&#3t,g:&L/>0X]3e$O@]#');
define('SECURE_AUTH_KEY',  'Z-VppU]F#<u+eZD=8lwv@[LEF:UC^8mNSOSy<C?4#)v?lY^HR+v#;fk89Y?U4W_a');
define('LOGGED_IN_KEY',    '>mB+|fYF*Qa!3;|$-.NA^es8X^w:yH2f_KTxB+UJ0bFE_6E:I*1vNp}VC^Ay@+9d');
define('NONCE_KEY',        ']OQ,YU-$3T`_7pO,K McAji)b%+$H.^@ .pQ00~ S+ V;W@^S9;whP=ZL}C?q!t+');
define('AUTH_SALT',        'Rbo1Mi87Examy2HY/U>34MfC,+F,J#f(;hkXR{Gb.y([|.9dryEqz.F|uxh857S)');
define('SECURE_AUTH_SALT', '0)aUmYJy>)<)]!]KXAT-fnbCB%EWehDIiVU)mQOtyF9$FGpbiD-*2-{/S*N4OeV4');
define('LOGGED_IN_SALT',   '&jZ]`v._+$b*VIAU&Y{A8TGB>I1Q^SA/^B)$|HT16;(}FxL6`qR,tc%v8-cQ2cW@');
define('NONCE_SALT',       'pl7=DqM*Gdu-,|<K_#ZEL6wy`_|!7OL+<zn+qo=Nu-C(Zg;r-(kUa8?*1vLhJnng');

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
