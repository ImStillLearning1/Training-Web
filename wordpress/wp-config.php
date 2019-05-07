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
define( 'DB_NAME', 'projekt_1' );

/** MySQL database username */
define( 'DB_USER', 'admin_projekt1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zaq1@WSX' );

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
define( 'AUTH_KEY',         '-Sr;o[a4^.eZFHTUlq)q~oV&1E@xYL%}Xi{~>5;X0k`+o6R#dq}bILfI/p~*?elO' );
define( 'SECURE_AUTH_KEY',  '+sHua_},*.]rPzaHN+=6jbDSgyg}ny& ;uCH`eOgt^G8f _sDykO2_@?n:}qPeZ[' );
define( 'LOGGED_IN_KEY',    'bF#^U_hx|H73W:s*4!YP6d[}$|PK%}aP5uw:ppKgV*(W{D}P`e]a$2M]H[4S%x85' );
define( 'NONCE_KEY',        'EJxuGekDMzQ@_TUs@F5P&W)FxkiI4mQCJnka@<WNp)$y~t]ecEi+mR=[I3?84g4V' );
define( 'AUTH_SALT',        'D;TZ9Mxg7D-MP/y$or%]aa)d2Kw$3YPe8VA>meB6n}+9!sDz94y28<Jcj!&<0*z_' );
define( 'SECURE_AUTH_SALT', 'kUVCB58[?}~GD! e+n=]6so5M$)il2Rdu&5WuB|naUv5DC)Ak!.im0gMRtWFxy3A' );
define( 'LOGGED_IN_SALT',   '3./;9~yY14&=/=YcsqVf|(/bo+lLh)/lTiSN[~k_9qUim33Hq]d`Y6yq> 5goFX/' );
define( 'NONCE_SALT',       'F=x}FEGVA?rkn0,_.G(UJ80OHqq;%)HZ7^y]EVykqJqcnW?%y~RdWc>,A#ngWTuV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'p1_';

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
