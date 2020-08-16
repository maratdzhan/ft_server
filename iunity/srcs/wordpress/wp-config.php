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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NUq-T*l.ELYc$lZhjUcM$Kmfc63OuyLBam.t>HFy*iqgGVJf}rGRL29A+W% 5wAD');
define('SECURE_AUTH_KEY',  'Kr1_LvD#,T(-q>~f?3I+u,Y8w~M2:h*>FXVwY-PW|[&+.LeHako~||[=-!kpw>qJ');
define('LOGGED_IN_KEY',    'eH-<gmr`^f F_V4mLR4{kaHpi1QeEB]_f_Cn+u--Jb5Pt>-O$j.++qiuE)E0!lm,');
define('NONCE_KEY',        'VdE@h-8VlbV|PeHXN|?]E,qaAjP+^ 6cx<moU|4E}l;u6:mxrp%eAv1PW1(f-z:q');
define('AUTH_SALT',        ',DM#S2S= :vo7UlqeCk|:ugeTC:@Pl)=#~Q|3$=AmkT*lxc5E{|MjTn4a1oAP(XQ');
define('SECURE_AUTH_SALT', 'X*5RR;*mxN=&|lbi@]j`6;Nex,j4g8=9/%.9/R3oY.KBlc0!;-u4_6+|8J|9yPng');
define('LOGGED_IN_SALT',   'fC1z!Q?OAt- -MrIH|5Fif+Q]7(;0I)uIyq2D+{o4ci%;R<DvE%Y[>>t7HP0CnP>');
define('NONCE_SALT',       'BrdGnf}D[q:{E:I3XX@Xyadb!|txW=b%8[Nf5;Mlk6tk_P2/<G@D?YOxf{Xm~GCU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
