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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'theimpact' );

/** Database username */
define( 'DB_USER', 'theimpact' );

/** Database password */
define( 'DB_PASSWORD', 'theimpact' );

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
define( 'AUTH_KEY',         '&1 `E3;%t+wJ;2Z7NCOwq5!48v3a{:cT>sL[_J{g4@rCG|cL<L}geH>GBa,h<jK_' );
define( 'SECURE_AUTH_KEY',  'v<d&ErD{7,n(+[LVG)1|S^rH|%iJ?e1 FVc4r1Ynv$#~qS%HuddX0ph6L}!`(Q>i' );
define( 'LOGGED_IN_KEY',    'MumlsFN?Jm>?Ak!&$i#+_7$r3EDBbN?LX$xl9?SS31&$53a`nQE6tl1G/-kP$Aka' );
define( 'NONCE_KEY',        'Z8{nK$ZzZe,BjE%lYVKib_zIHlp?-i{$gK;PvX)E|Cpxr+eaE2[HQbldt+X=rJyF' );
define( 'AUTH_SALT',        '[+FE6o+k l,F44i;(,xXP-fD,Z*J[|F&[Vmx,QV_q+NX.&6Lu^!=PJ1!7Msz&`4x' );
define( 'SECURE_AUTH_SALT', 'aOMKp+1Vd-y~<GG]NMr?U?L):Lzk2*O2}b,<}&H)Az~t=`9ii~Bvq$igTBWPqC+@' );
define( 'LOGGED_IN_SALT',   'pc_QH:app, rR,IHT@WoMT<s0I<.}810Wa3z^1_Wbw&.`l}89OF1ATIxHM/B_o]N' );
define( 'NONCE_SALT',       '3Twp#Qg>3pCXZ#b&L3YmNqqPz7t|&cgLcN$1CXDg/o=Fn%xZ`t-1^,o1URe`1t,=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
