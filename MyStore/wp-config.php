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
define( 'DB_NAME', 'db_store' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eUeqmTULS[teB;_ktSXFfVk$Ot8fP)#HyMy,l>c&tTX=Wn!B+W}p&x0v;^eS:]3d' );
define( 'SECURE_AUTH_KEY',  'A+oQM3/*%&cDw(<P!mC*Sx$;:[5Ba36at?$ysn2/J^z7,7*>gQN(S3)2g??VXtT6' );
define( 'LOGGED_IN_KEY',    'WmE:abyn;!ySh#.;FTn,/g*e#E0kErw~]]JPw3)Ub]YjtN]^ ~mm+c+MkEd3g&`y' );
define( 'NONCE_KEY',        'y.Bd%;Qda[<m_Pc%&}AI&4{tGW-~lL_WepPuYgY*rq7t3x#Q6[ ;wa~9O~H/2Hri' );
define( 'AUTH_SALT',        '9N!8x+$r&-vmLM`of.?u,kA=pP/b|FBQ _}~$5uCW,[8K}4(]z|:2PvN5fA*VBpR' );
define( 'SECURE_AUTH_SALT', 'fx!r^OCF`CgL$eO_WG855SmB(~B>.?s_#7x(Tv%mFJYltcjlL]PlCI/JV3r#3EZ7' );
define( 'LOGGED_IN_SALT',   'B|iV@nQVf5vW;mI/5~=D`Mlm!5O#81Yt4hH$#Wh#Of$`Tr;9sv42`DGQ]IZjLiiu' );
define( 'NONCE_SALT',       'RTh*$/HBu6(nETe_~tz@T!A&FPEs&zs0r@ &ount*)l$nTQ[<PWp>L|OgYSez+KU' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
