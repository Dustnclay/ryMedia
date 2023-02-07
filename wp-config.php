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
define( 'DB_NAME', 'rymediadb' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '<.#19M_y#@ms!+htb#<O~khH#p!@;{qmBNJM./lL;47(wXc<2Ztt,kM%psDmxD|G' );
define( 'SECURE_AUTH_KEY',  'JwqJA,K9Z;Lm;NU%V0,n&nx&kmKsI%;XS>8c;a%=c?T+Hfc^Vb`?FRZq;p_*sm.E' );
define( 'LOGGED_IN_KEY',    'Lg-Xx_)rQiw7c/B6xNGcF*oiz.pis*rxWhfwfWftQ:2.[+{]E=B/Lr,=9o:]P.VS' );
define( 'NONCE_KEY',        'pR.GG*VvE0LD+ Ca27I-vo$4Fw*s ^QeB.>WFq*k^Ylyt6r|og,NZsfG[40aK0ns' );
define( 'AUTH_SALT',        'gAD%vbsuk!j.u!<]9p`H}AKLHjcR{QES8xwZ GPJ$UWO/[7pJm@KEP=GYf~m*e.[' );
define( 'SECURE_AUTH_SALT', 'W3avH6h7Bp(ACtr7Z<wgRrl=%hKr=!yQWu<RB$>Ia]{H/(2<~jC&>?)<dN^?.SjT' );
define( 'LOGGED_IN_SALT',   'T: qDNw7MZ3qrVax R/W4~YpzLZsV.D$T;SLFSkhH}iZa4d/^tGFfNs(a1fcozj}' );
define( 'NONCE_SALT',       '&x$CpNm9gptjAyS2Ae%<8f%+=p`!PcY(<0UP+9qh[@e|JHl0G/pW{wgZ6}_rWHp&' );

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
