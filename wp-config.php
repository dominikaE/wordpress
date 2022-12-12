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
define( 'DB_NAME', 'cms1' );

/** Database username */
define( 'DB_USER', 'test' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'Gf7c6Uap)-SxqmGpBGG#sr&Nvz;b|_J.mQGfWONVC:(/AFQ_Q!s5cyQg=-e}Mhk+' );
define( 'SECURE_AUTH_KEY',  'jncUF>&c`u2!=^6GK@DO|:wPZc!u+@tS*JRCrvm!ALm,Xl%D7~gL,Hht<=i*Qszq' );
define( 'LOGGED_IN_KEY',    'N?;4%=(Z+>bXE<eXlJ^ g8e4#kH+AgQ]!T*]as3yFw+} T/v(93{o3=Jj/~XTf[<' );
define( 'NONCE_KEY',        '^[[RcK>Kr) f-TTj ojQ^F~Xp68Bfd<Rj4iv}B^sxD4_#u5>bw}}rcq?._#.zo$8' );
define( 'AUTH_SALT',        'U(AbFZ?A3Ydit-8:1&e v,EaeO91P;}YkQ6fW**XcZzU])G o2/.sK9xJWLy5B}m' );
define( 'SECURE_AUTH_SALT', '*Bxzbm5AuIL#GSFge:rNW@NSmUT-5+Z/1jh2zdv7v#lhU*IBAfno 9erSLJHoqo]' );
define( 'LOGGED_IN_SALT',   'kBj_>_%5}1<I|4!W%TYvtuOtaJ.W*2G$[bb;r>WFi<1`(;Uy#+CZe`Gle}}Xp*Jd' );
define( 'NONCE_SALT',       'lp/l=5a&4v]hzK1:.n5c@y23>mroV4[,EevGr2Bspr31-APP:ofnMTaZ#8b!h0/?' );

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
