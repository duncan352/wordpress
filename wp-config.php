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
define('DB_NAME', 'chrisblog');

/** MySQL database username */
define('DB_USER', 'cinthia');

/** MySQL database password */
define('DB_PASSWORD', 'LnTQxtlX');

/** MySQL hostname */
define('DB_HOST', 'localhost:/tmp/mysql/lorenza.sock');

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
define('AUTH_KEY',         '#y0wnD4 S8V^7b|9`~-0_5qq8~Zd|PP0DHH!x>B3x&kT-o#HBU`sUp0~=S {nGZ ');
define('SECURE_AUTH_KEY',  '#K=aRiS ZIKBj(~}votF@j66Be@fEcW3w(/G!YP5J4rZg KTu`eJmGov~u]zZ +U');
define('LOGGED_IN_KEY',    'S;1Pm>;7c0[n#TaC8P,p:Hl9,|pH`DUyNLtMu]v7#{m2*Wz!uT?j5}CH{[ze/2sY');
define('NONCE_KEY',        'RuS/29R_U+k_yiiaOb]YT0#rj#iI,UYu{vIwE`|bN%yfl{P R(LVzge53+tWS{b/');
define('AUTH_SALT',        '6yc2M;v7f=aS?_O;(+ *ZsXMfD,E5Vy8^:mD/21+ XW^yQ+72$*XluJNG.W2Fl`o');
define('SECURE_AUTH_SALT', 'qm%7lN6z[D V@Z4g$~G_`FzbkdsmlP+6BgVH2aIg$u9kK8c}uB@h&^<yVz:^N2yK');
define('LOGGED_IN_SALT',   'A&4+xf0(t4S9u}|McLUe*W g.gbdon4T bgj?YmH~wYg1 SfrJf{6R=MNcZZU^2T');
define('NONCE_SALT',       'BC+<nF`So()e{VUNZt,lAdK}|N,$*sdJgQgxQ$MfB3oh[F:t51l!9]S1%m3y<TI]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
