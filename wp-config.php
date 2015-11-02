<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'portigal_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+))-{fT((s|i&YJO_cr<iEM?gRq:Y%)P=fkN_mR@Ye/`Cmo8`bX{/=g<JtCH4}~-');
define('SECURE_AUTH_KEY',  '(89zm5;6d/ <w4]18Bf|JFf~`y6k8D:/:BZSVRB#)>6^B+!Qx7SNw|r^?c;+Hm]L');
define('LOGGED_IN_KEY',    'ryz5;]xALTaVqC-:-MkGT#o?2P@5JzHk`Ul.c*DO?J*ar:kF76g:WzDn-0I!P%Pl');
define('NONCE_KEY',        '9=7BC|31+4@dgPIX;I:I$U41P)v57>zmEqw@7@S.OjE^|4QH>5M[2L/g27qxFLyv');
define('AUTH_SALT',        ',>WTBj529?USytcv!-&L#`M^>T3a-:a*7TsP{wm-s]A?X-M|r88CD9v++b*+,nv-');
define('SECURE_AUTH_SALT', ')na]U$lt5`!jk+eum[}!,GebOEz9FK,U+)u_NAaBX_ 58w(-.6egz#QsIDfeGm%.');
define('LOGGED_IN_SALT',   ')FiyytOhA6^q.)oN2Tu]*XjB+K]T|JLi*1 0}N^_-xTuiP+?Io;Z:3>dB+%4RRdr');
define('NONCE_SALT',       '}](+v.T9 ^hJLh{f)IgqC.ccVcQe|_a#srd9@o|({_9l82mo5vLCZ/gA/^MC2MN8');

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
