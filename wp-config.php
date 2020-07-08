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
define( 'DB_NAME', 'makerscolombia' );

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
define( 'AUTH_KEY',         'P)ObNE:<a|y2214jK#s)rK7T_gC~wi%ihF=g.}1e]6d+8YRVW7q%T$Xe?|uD>LoQ' );
define( 'SECURE_AUTH_KEY',  'p_%gc5OP_>~@V1&`,)JPPlm9uVj5a,JGMz`fi: ^1qJVu+HtXbSQ.VeE_}4J+GDO' );
define( 'LOGGED_IN_KEY',    'N@A%m-oHeUbejdA)zE}xPq^Q`!N<0y>_iqMp5xnigSWQU@`J*wLULZ(4Fm/T_=8:' );
define( 'NONCE_KEY',        'Wyf$RLUz_OYf{=m.dI8/ 5@e9P)8uP3SOn|[wd[{J[sP/:w9f>!3P1_8o|!AGyNE' );
define( 'AUTH_SALT',        '.OVb,{R>ePt[_rf+,}X+Ay;MHHLJ_;4:YMAJ:P/)Q^TKw!hA!r=EPXjc?0m}ksUN' );
define( 'SECURE_AUTH_SALT', 'zVb+4ed3T5aX`)q-I|f?=}0[,]bj_^5HKKWoNwC8UF:ny8*!X`L&u-U_`P+-K@|A' );
define( 'LOGGED_IN_SALT',   '1{GreMz>)m=k| aE,X-&~r Y53v}=D2~</WZk@ku}91@NdoKtq:?emJ1F7.NPT.n' );
define( 'NONCE_SALT',       'j4OzcN/{e(;>ZTlM&/2nmppa-/WyBBUo~>Z[k?o@Joh!/C@CDo,lx#E.yjMuhY^m' );

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
