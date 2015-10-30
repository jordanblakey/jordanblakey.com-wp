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
define('DB_NAME', 'db543542727');

/** MySQL database username */
define('DB_USER', 'dbo543542727');

/** MySQL database password */
define('DB_PASSWORD', '_K3yt3ck3');

/** MySQL hostname */
define('DB_HOST', 'db543542727.db.1and1.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_HOME','http://jordanblakey.com');
define('WP_SITEURL','http://jordanblakey.com');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DQ&ua40$#$m|k|gEgK]-RtQ,1sYkVLbm(}FU_8E<zQg/6F@}vTr;)W#sr5hQXS2%');
define('SECURE_AUTH_KEY',  '^II#)5)^RQ(`9MOt=%ng$6t{$dR4_B@;K}$z}0T3~(-qm]yM^?MrrMM>,}YgFWzj');
define('LOGGED_IN_KEY',    'zLMQ/iRF.0YO{01jap6)kcHXAn])0$K}7(1+Q.5{CpBUGnf^E*zjDz|mV w)oQg2');
define('NONCE_KEY',        'tK$v2EC$kKhIfUf(BDk;IaBPxq&LUeW$X:m04-cMGqYn<%nH nAdXs#Hijx2yOZo');
define('AUTH_SALT',        'PFk[_2+7ua^I.vv:X@SloxY0Se 5+)9#p2)R?*C#U 52oYmm=Rk>2+ipKwf4! NA');
define('SECURE_AUTH_SALT', '=Kvw!XEe6E{w7Y;=s>zndDbKVq+BbK{{G>U5}v,erhZUtVzg}T_j7}0SsOT6OJBo');
define('LOGGED_IN_SALT',   '`l qPAYEG_}4FV.iMnA-#q)cPD{8;J,t~Mm~c$|U>vsCI1iX)f0$;D%-TP 4mN/,');
define('NONCE_SALT',       '+-}w|3p`jh@[}hZ;gt?uQsv[gosh_eZbvg5,&4Wn0?dODl/%6r!JrW @chQ8f2dY');

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
