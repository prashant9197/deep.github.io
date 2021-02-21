<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'deepioti_wp' );

/** MySQL database username */
define( 'DB_USER', 'deepioti_iotics' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qweASDzxc@123' );

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
define( 'AUTH_KEY',         '9VQ*!i#`dWrNQw93kRs0%z?`LY4!,n]M{y^4LR:HI-PlJ(6d#cWnR:$E$h.x$tb/' );
define( 'SECURE_AUTH_KEY',  '<M&1aUGW#gqYaFfIiRBDm4}WIO_@F69IJ#4niM|Hnga#^y|Z,z;V<re=FDy?q?>[' );
define( 'LOGGED_IN_KEY',    '&32P_(5sekV^MTr)P)&dP>]z2M<]q:w(Y&F-&Y.05@2b,PVhN5?rA6O=uTj$Mqp!' );
define( 'NONCE_KEY',        '<amla0^;hpf4z|fw|{E!=o.KJP5<sWSh[Zg:0~MSe]QJB0kgHB}Zs3;OX]{GhoHO' );
define( 'AUTH_SALT',        'ts[ =@.RId-gY%sIb^G7hiC1s}j%rMpHx0}~O~Lh~uT <D<w4KiSzm#/ah^41w.:' );
define( 'SECURE_AUTH_SALT', 'NG7BS,B3N]}dvY5Gh8LsHX7(PFC3z7-{aS&MIu7bQ!Bvu@+v+Y9c9F}*Y@{!Jc24' );
define( 'LOGGED_IN_SALT',   '-<FDn:}:>>v!Tmw}fkz$10%*,fk;!NA$]3k^CCkekX$t>(hMsT]0.u*Rb6F*v^AE' );
define( 'NONCE_SALT',       '20tVVB w@e1bS$/5@,py/1<u<yH>/&mcQ0lK#AS}_Req B^@O?96A>N]!Oyz0DV~' );

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
