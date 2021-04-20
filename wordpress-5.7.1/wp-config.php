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
define( 'DB_NAME', 'wordpress-5.7.1' );

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
define( 'AUTH_KEY',         ';@Z=BkKNCLq`a.x-4P,=8g:o606F-9t<i;Yi6K6@,1n(YE2(VlJ#|Dy,e/Rl^=wl' );
define( 'SECURE_AUTH_KEY',  ']P2cjhW}}= CR[-`Gf5yv@o8K3p}pvig1pNR/43nPKeMg*`fCU,e+}<+d,di/i/L' );
define( 'LOGGED_IN_KEY',    'V2PIg<dS Xc=gBcy5YpYp3zveVhU/Y8VPZcPo49gS^O{)6Nr;`0%,C7yU`L%AbW^' );
define( 'NONCE_KEY',        ' okD|w$4RQHYop4Uyl:0J}MFxz9cW1uf;. %0,xYbbwv{OOKw5+`zdEpsG/ch@7?' );
define( 'AUTH_SALT',        '@fDLy[3BGJv)Sjv`PMQNQ/_]i%>L0X-|t<4Oan=TbG],Oy>Z,XEW:cFM|UoM2im8' );
define( 'SECURE_AUTH_SALT', '8`/&xysm6Y6ErC9o4B(xhyh#vHpA812o4%(Gw-jSoo4T$.|H<=J;ee@|<(Fc==^-' );
define( 'LOGGED_IN_SALT',   '[EtB;>LZ).%luXLa/lw._MBmo{HcZyvBp} #`uwsIhcx`4Ii?N{e?eh^LE6DX#.@' );
define( 'NONCE_SALT',       'dl8h&i]Oa*O.5fk9fJ9WySrNhY3Mg]K2A/3yCeR<Dzaw.j(Ff!G&`LBO9&^Jl!;N' );

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
