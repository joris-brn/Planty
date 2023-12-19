<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ')41M6m=n}W1^8}HSBKqE=iQZ<Ys/xh@h; >P2J+P:3#ce)_+ +N^/n<uhqdx?6*o' );
define( 'SECURE_AUTH_KEY',   '~X)D0_Lo(Ku:zN/+W1%7y9nd v{w`ueD`#o(_[fS92h^,cw6c7tK%d-{HzA-}E86' );
define( 'LOGGED_IN_KEY',     '$(wxd<}h5#t%ycwp#Q(~/t~pEDVglsc/t>3+t}.u[)*YcnxE%5,&9[t_>| vIC#f' );
define( 'NONCE_KEY',         '%vZ)K.]> Cw&-IvYESk&SuSLv$=xF*^c^~](J@&0~~!*[!@[OSu#KDO~sj$lQUR|' );
define( 'AUTH_SALT',         'Fob8W^Oxg71N9dZG-LJ/rZ|x.VG)0<-OMelx.)nho!QTXl-0U70nUzk#*v]2=ru`' );
define( 'SECURE_AUTH_SALT',  '[XyX51Lgd?qhp>^gi/>8>GTZ II>m_-OSGiU2ogy!`[8FZe0~cr=8WJY/u:?R)~E' );
define( 'LOGGED_IN_SALT',    '+0mriw`S2&UG{ncn<G1?f!v1@|cB5sgQ]_pKDUqP]KZz}1$5eMu*GM)]|!%W$O|=' );
define( 'NONCE_SALT',        'a?wJM+P84x9J.Pn-(*v%0Wk5kRYi`G=HYRkv(evK)Q0Ze>nLjhkA:o`0JRxwuFGo' );
define( 'WP_CACHE_KEY_SALT', ':len.,BrXI~faQt.~Y; pxWj!-NOQL!bx1;f>0*nA|Dx&0iqZ,;aw$yC7mQJVGRw' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
