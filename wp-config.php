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
define( 'DB_NAME', 'wp_v2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'duyvan2001' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         ']_aptPtI2G6-Rnlcb&y&%e@QrVrv&bC&GT|fi@0OX[fpYa6+H7j?)8q`Wc  P/S:' );
define( 'SECURE_AUTH_KEY',  'k)v) n@6d(uNuvqmsZ7k~ =mD7&,3O+-(7h5nG])sg|Sp$--/bE,M#d@i@^%~0Ht' );
define( 'LOGGED_IN_KEY',    ')YjBaXNPM)[gsojr5.3usH3yy3b6erMbMA,i,jal?,$,HLNy:%+~t;v{Nc!a#V]c' );
define( 'NONCE_KEY',        '^3g.p~+Q%^RQ[{Sn5}%B+ )_{ma|1/3:3AeV!PA~H-BKv1-1,-)@X@sx*O{d)1Lc' );
define( 'AUTH_SALT',        'D;YNc+Z?ahs+KTW%7;[[~]74BW3soN_rQ[tejR1P3m(TIm_.,?<tpuTI1N2Mech7' );
define( 'SECURE_AUTH_SALT', 'Z7ekHDX6_;[(QXX(;Wb?%_*c2,Mq`?zNB;T6jS)Ja@WWKQ2*B}a9)+CZqf]@-;De' );
define( 'LOGGED_IN_SALT',   'vH1?m#^jjuB`>M*]|zkP0A_6YEV^GY.|fybQn!QK>54:s.8n{1{ekj)MA%c;gt]@' );
define( 'NONCE_SALT',       '4IyPC8`^$m]`X8`76;-@YYXysWIBmwx`V_S:?QVVnvtOh!*Wru8BU,AI#}O6W=W=' );

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
