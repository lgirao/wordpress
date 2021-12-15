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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'V% &9WLnKUrfTWJvH&B;]~o}il,(W9zv$x4 GrOP1X~TpFQD)$AVJ(qR%it0 J&+' );
define( 'SECURE_AUTH_KEY',  'n*+Sq|^]_.(^bBMc}}K&u01J-L3P97i5obZOnnO[ff~`c0E2GL7d&,zL+8wh7mef' );
define( 'LOGGED_IN_KEY',    'HCJkQ%@;%bUM?aCCB.<R:Tm.^zKEI=?=*< &2xJi8ppYr+_J|:j]-IYJ8XYwlXG/' );
define( 'NONCE_KEY',        'a_|MZ_h#jml*?j`.|+~S9]1XeK##o,9>zQ30mIS,w4Sh(-7.E=|8LD,H-xg}EpAQ' );
define( 'AUTH_SALT',        'cdtGC Dol&*t8.njY!Fq8=VTX}5n N>ERKOw_ 3v-XY73~F2Z@E{yA]Nc7uji|l[' );
define( 'SECURE_AUTH_SALT', '&w*h^75E,jU0C+46oLV~~uAgN1Xy45aa?]7/oucF^}^ZD&R=,.s@y[P^=e,bO9$0' );
define( 'LOGGED_IN_SALT',   ';y%M@{3?4GCSW(f^^xeE`>]V!#s]1c>/<iDPow9VY4X4cgAXVTLS6SB,hcb+.-U|' );
define( 'NONCE_SALT',       '^yR`4[.ld:H$JA1 pNP]SAcTc9#};Dr+96($Tv6-J^YmGi]C8?N2*5 Bibn;X4Y ' );

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
