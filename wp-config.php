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
define( 'DB_NAME', 'ferdykorp' );

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
define( 'AUTH_KEY',         ';`X(mN[w=hh@bMIi35MTO.WoXTh`<RC8WFQ-!9l#HXnz@n=yYZ77+Y]B6%jLpCbI' );
define( 'SECURE_AUTH_KEY',  '..n;X}K7UX,!*U~0#B(_On[%;o&0_>l3X`(02p^ZISTaQ1l7|Uv?/A3*2@ej+-0D' );
define( 'LOGGED_IN_KEY',    '3LnEV-gTZ/S25y?#I,f-qvz1Lty-d?&<J6m24}Bm}INDq=l3NJA>JMxi7Pn;(b&e' );
define( 'NONCE_KEY',        'lzPElS/V*E!~QD74e[3kXSTOvG@l5_yw4m:@JVIR25N?$D.5W^:m_t_uTR[m[[J+' );
define( 'AUTH_SALT',        '|v3LO*02{>,Mp^jEcy[SH>#I,AvMBj_Ij3qsnn/0;+8&!a<K%Q349LenBIK?5.p/' );
define( 'SECURE_AUTH_SALT', 'f0U(K|F2H_nLwFjRW(5bw;j/061pt.wFIcu6@Fv%X,P:/P99wmC?8WYGOosu0162' );
define( 'LOGGED_IN_SALT',   '@YZ|bIvt4GbeBwitsN:>Lj~mI#n^dJwVO`<jkhU8; NgrVP9rj%:-4p#2P0![es<' );
define( 'NONCE_SALT',       ';)[M/}SzLsF>t~oumywTDmSW>@$pIe__3BaFI4`[ mCN6ee5^{xBq&F&|4onCf7D' );

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
