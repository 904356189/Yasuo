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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '192.168.1.134');

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
define('AUTH_KEY',         'X,;^5y7[]7|!*MtrO<iCJlsVrF ^seQpVm;3u)RIHFv9mhA.Ps@?j4IksAg3+E5x');
define('SECURE_AUTH_KEY',  'CQMSz=.u?}R?=P4,;0AQ[Sz87o)Xfl}AeKD,_zY(%UaAb!I5+RQMy}R^`,RY%$C7');
define('LOGGED_IN_KEY',    '/444~K9<]QF$8&`Hicj8/~+fT,l=`a%0djtx$==JGOn}$!<K*]jf]0bD<^fWw{Ck');
define('NONCE_KEY',        ';Lt@=/0R1Rqw`TTgq/s7V4pqQT/Qev;:Jc}@u7hK$,I@1AdZsSZ0-%m2`%={5WZo');
define('AUTH_SALT',        '0]<B$Fg-:FGq){L#Fb)KT_oi(|kQX4D`!3(DSdykfMu$q!|(9mE$NRd-/+.9806U');
define('SECURE_AUTH_SALT', ')D8GU&I>zP]WEgXP&G{1J/62y2v$Ee}}1wlW/~XS hsiYfxO{.k W8sFj74EW^b^');
define('LOGGED_IN_SALT',   'xXXC`0ET}srecXwQ:dY?x@^S#EQ3;Zg,orZ0yZb$QM^0Q6dSyN5{M}M(}Tc;UQ-0');
define('NONCE_SALT',       'mfD,@R!S/@0{][Y=aNE+dL?Be;2&eE]6V;+.v[T)w}OfubJn O-8>&Uh1Z9t1!F;');

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