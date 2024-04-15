<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'travelagency' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '?_ixpctPFFF45j|9c#mRyT+wSq@FWN38?7d=i2f *:%s[FZ/hM+(d!ARF rUDC_u' );
define( 'SECURE_AUTH_KEY',  'Oc00{O*.1[1vKkQ.a:}/nS/m;fvUN NJ[g65P_zcH]OpE.R2GQf2MM~dIyf>f*b1' );
define( 'LOGGED_IN_KEY',    '^J[G&R+iJQ829K{}-7:EJl4&C,@xVjXYh+/[m>URBb4a!?qUsSc?N+oY~Rrw<r!t' );
define( 'NONCE_KEY',        'Wk&M{_5_}g=MO@ag}drQUQ]KuGkp:U-xzMT#SF6,I:L6=Hu@w-0K @+rI/@2.hV.' );
define( 'AUTH_SALT',        '`|QBlh$_n<nQM~|Cs)kz{uun1^]}-j,KpL?+Iiy{>!fWSHQ<P]z%s^}KWm>M<a4S' );
define( 'SECURE_AUTH_SALT', '|{$3Gt,u|h]Xr?)[Z>Y$%^H,2{=GTxH [9rcO%r?/,!g,J+$Y:aFz^p GagIi&#;' );
define( 'LOGGED_IN_SALT',   'uxYI>BP{L&HJbp>Vm{5.J%0K9#<TR#azgRvA2zBn(3(~_M(T5EL+.xR2q#1|U(dC' );
define( 'NONCE_SALT',       'Bq#QyI~)Da^peTsKy%M3L-J(:%F5`v-tO8`>mKh:C{?!=`y+n#szuoPgtZUP$jkb' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
