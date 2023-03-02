<?php
define( 'WP_CACHE', false );
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

define('WP_HOME', 'http://buildnetic.com');
define('WP_SITEURL', 'http://buildnetic.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u657051008_rewamp' );

/** MySQL database username */
define( 'DB_USER', 'u657051008_rewamp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Surender@#1036' );

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
define( 'AUTH_KEY',         'Q*Q5yz<n81%Bw.74>4At~2/T(f-w;vgt$clmn4Pkx6IkIOe7Bq-U*MRtwgWub!5C' );
define( 'SECURE_AUTH_KEY',  '>Jm1.Cp1<:?Ds=C:Qwmj/vFE5/f`==FUgQ0u:$~X&9V`1kL=C,N+$ (UO]qp!h+m' );
define( 'LOGGED_IN_KEY',    '|rEGFK{j04$8$2idD_k%/ikf453|V]jL5h3cJnm_u7@J/u5:9+f$]~kBScgz!L%0' );
define( 'NONCE_KEY',        'J8I}X=+inGpEIWZk{s}8m;]&G42Q@F!$KF}6#VY{`gFQH>o7<GcWiyxj.`*tEP1|' );
define( 'AUTH_SALT',        'S}=lUw+gyG`TC5pueP!/ZMSH63t9;CL-pEY6.#p_!({!j,$^Nh}#kD6yPlnNE}/;' );
define( 'SECURE_AUTH_SALT', 's_i.A99g]KFQ$V8g/ZXZS<Di+5k$2C_]@<ZiiGEjfiA`[5vz7ZNm*hq{)cf&p]cZ' );
define( 'LOGGED_IN_SALT',   'GSjy548c^!YuM85R}MS_QM:Y;z2%t0xL:U~!.d>Dv`z={fmFc959dK=v-Hu@[7/7' );
define( 'NONCE_SALT',       's!7`J zBU4Gk#!DB#~8Xz]uBVGM0&+qq42@_K(yWj /X-O-$t9G@^td}7RuBdnkV' );

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
