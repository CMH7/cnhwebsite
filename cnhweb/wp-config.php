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
define( 'DB_NAME', 'cnhclothing' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'J0R?rVCnLz>7mitrD~4+/J2f~)j<~zlB/vuN4r:~fNK5nDy~~>S-Ze;^Rm$abTC7' );
define( 'SECURE_AUTH_KEY',  'Bgg12&Ke#ZeZ?n]RI_XUw7!<@4#?+!kdS&cEX}Y+aQ}`[m#ukS>WyD#P.rFa*6Ai' );
define( 'LOGGED_IN_KEY',    'CR=miRw7blm]C$u#QaA#mE(X~`|YDqZ4sy S&V##Z]B~s:],Twe{Ub r:Z13[fV2' );
define( 'NONCE_KEY',        'f`.Gw~ GldUkK d:_Gf*,`*QQlQFd*s{,}z0V!laNY(=+M`Q0LB;<[5J.r&wrY$2' );
define( 'AUTH_SALT',        'v628<rKN&f(C>GSbAKo3/X!|=D`cuXjF677R.X]^agBN9(/8=> U~y|5ax(N>Uj{' );
define( 'SECURE_AUTH_SALT', '$Tu].wuM F$_R[`x3@TnH2/D~CJbh(X{aG%#51VADCC1n)+Rz<A1~e<+H02gj70Z' );
define( 'LOGGED_IN_SALT',   '@Fa|0u13y*U[1Fh-thf.%DKu=Vr:<IVMP@o+};0UClTJZd^l?:[J@%q!*9~rNgZw' );
define( 'NONCE_SALT',       'O{ddq=xZN14v*Sik3Gg#gS>2JW$fcFMy:E5_hH9%AwI- 1~?-Ir{@[7)iT;FqZNQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cnh_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
