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
define('DB_NAME', 'f25');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'g<`M]:p^x=OyIfhj(41/rOq:6J]g|~pa-Gl[pTDq$gX-6?=jd,gorooUMYAlJ`!J');
define('SECURE_AUTH_KEY',  '#-oeCBy}[xL(T.:iEW5n|$+>{. |7T*c3fv6LtYyb2wA`:m0!&)]bAKQHL$eNr.x');
define('LOGGED_IN_KEY',    'X8x>f[,ry%my>~+YMs9J.-ZtRNx-~|vqxIVJ%J*p9tu6O;9KI]K^NA0-YW{O2|T8');
define('NONCE_KEY',        '=H~(eypM$<{zAw/bL|V$z@9c*6-~qLaO7f,x!wQdbC7vLxnn+,9-||8cd-wg$!5r');
define('AUTH_SALT',        'PUIW2-9L=@${f}EpJg(r5-@><zCUPg0:3ilSRWSzq:$v[79$S)1h.}f(9cd>Y!c`');
define('SECURE_AUTH_SALT', 'vdpxM-eUSI0vJpG:Z{9:V;0`4|X1QE-]h19A/gqK-gH^4`Imt^}ap0_AL-t8fLPS');
define('LOGGED_IN_SALT',   '6,@gG[!1G9Vqg-k9& W6?yi|b.6.Wp3/Nc{o09V}C~3 =K1HEU1JemPU{M9bK+}*');
define('NONCE_SALT',       'K[w OP{-D,4[ ^w,XMG:E|;UJC N|n#V1H%mb}{#%I:0iL&Qy55 tDIh+jI./Y@a');

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
