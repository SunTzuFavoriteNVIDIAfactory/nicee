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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'library' );

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
define( 'AUTH_KEY',         'kO[KNF&^DS{-|t>oJISe*>ZvQ2;dxq]gN0DqzWgwSbB9~Xagb^D3*QbjSgB#SUfD' );
define( 'SECURE_AUTH_KEY',  '$be}m@%1wI@M |f11<_$S)I98utqA(Vgl,lvw]<1N,Hd2apj.LW:r~Apu5HbI=|!' );
define( 'LOGGED_IN_KEY',    '-0)ysK&7h=Oz~K=zxqeCFgx>OR!LTn<hK=lVWIO:!(V!;}[vlp}YW!5CiS9d;I L' );
define( 'NONCE_KEY',        'Q7`?C]<L5}15*tmjXv^=aU4,y9:EEquz3r]/W-=C|l:%|hO8uL9V`{_wyTtcE&/-' );
define( 'AUTH_SALT',        'bb~ZfocE&jN&sP:L4VAF<n[[(!c$>$|*kzR|f?=EeL<Za^3Y?Q]c:TlmoBs *uU6' );
define( 'SECURE_AUTH_SALT', 'DE[t6*Rn0GI+U)@~I5!>l.n^&)HzkQ~w)&YP<Vl3`-$&3d#j!h{&$T-U4DNo*m2]' );
define( 'LOGGED_IN_SALT',   'FV;FA?eT+p32z;ga39]nf)jxaw3:,vZ<{q9gYY_?ZD+aCw eMZI(:.OPPVnc-Nhh' );
define( 'NONCE_SALT',       '0vBAOK<S:8E,:Ss -lor2]bsV]Uw+-x)Xzc~) ;w9.BG&:y%y^E5[603RS?kOi{b' );

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
