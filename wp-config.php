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
define( 'DB_NAME', 'stock_data' );

/** MySQL database username */
define( 'DB_USER', 'TeamPublic' );

/** MySQL database password */
define( 'DB_PASSWORD', 'm+7JsCzRN6xYy9)' );

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
define( 'AUTH_KEY',         './#k^q-`iaPlQxrP]xt(k0>><IdvbNmddjiM1UZ!S?:xLyz$(3i@oQ<k::Sj`.Tr' );
define( 'SECURE_AUTH_KEY',  'Sr39VwW6~aVVA54]P.g4hOUOi_7n3>foC* L;-c-2H GiRCMuu,%M3VH*b{|kx+6' );
define( 'LOGGED_IN_KEY',    '0}Ka{~3I<&t~,!o{7h4]FM9+?,=-YiP;+-dMyj]8He@~@kt a$|~6z!SeC**TCj#' );
define( 'NONCE_KEY',        '&il;#T1[`|)3{P|%xoF[axP7(1&I5EKrID{fL]wJ>&nH1ZMl&G?7p>p9y4|vd?uy' );
define( 'AUTH_SALT',        'hS{F~E{R&I[L8vzsOd`4:1|]e+9i&B)cz^D<4A-Yk,j}Qdc&AzqNquCH9GHRPM|]' );
define( 'SECURE_AUTH_SALT', '/BtcYM.HP9X;9?>p0}%=pi*Z(f&QM<c|ro>$E!vBQuw{cuy_`KLQ<G,C;Osnd9o:' );
define( 'LOGGED_IN_SALT',   '<J_:xJp$Q5Kzy9Rn5$@k;fM.jeEu@xaRD0dz63A6f_~nKpLlZ4+Y.8;X=7RD!P~-' );
define( 'NONCE_SALT',       'G([w!z_PW>/+e 7)u#<$[TyLT.`p3(8CwrQAmuJ!^ro9pZ>aG^2h@~BKBEK/@T`o' );

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
