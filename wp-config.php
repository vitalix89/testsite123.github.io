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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'q 4I$r*Y/JB4^fV7jK=+rl@Z6?BHEfqk<|Vj.udCD`QQ6BoT~fF2/J+u@y|u8&{o' );
define( 'SECURE_AUTH_KEY',  ')EB(h_cPQEu;D4[^XnCJql#*rs(n{zhK3|>!K}Y&!q!Q%%q%*VtmwYSsZ3UrDeL=' );
define( 'LOGGED_IN_KEY',    '01vlRpN^c.cj011wu,b)*LB?>%$ri#s|^:[7gHnNte/hSUeJ6xfO<,Vy[oEtvrr<' );
define( 'NONCE_KEY',        'qR*D%kw5So0x Hds~]:sbNK@[k,0$ *4Xhlgm4i(Z*]tq:&KI=r:jL:3,R:))CjE' );
define( 'AUTH_SALT',        'HWLw@sg$4{Gl6][$nm3;+W2#heWJT(063Vs0`<?H=w[n=[1UP)BC,+_[Mbn50E0G' );
define( 'SECURE_AUTH_SALT', 'ft?y?f+Fyd03`:K&?=:=w2T-aF1U.)Sf_%jXQO92D43ojr+x6rp!nAC=O.2R]ZIl' );
define( 'LOGGED_IN_SALT',   '9[TU<PVpM5|`m}#oen{$0v ~e?6:SU$Rl?,.v6F(y9Tu_OR_jC`G^_jwmAw8m75*' );
define( 'NONCE_SALT',       'z+0>RMyh7{.7x.@Q_fPH93ig`I@VVCp]Ck_s#z!f%n+yC>f)nD2(yPeyR(~IO5|f' );

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
