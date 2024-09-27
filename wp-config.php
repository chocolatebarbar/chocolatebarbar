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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         ';i3[BrBgi6xl;n4;[8?4@g!WhzZfKG dMhH}eS@7}Tze5p/rF>r*LvUPC.%bT-@t' );
define( 'SECURE_AUTH_KEY',  'P,]0f>/pLoTqYy YqU@M($M4]fTQT9K[L3TYRhc~^[4;t[!kL1w; ;z&ma#ziL;*' );
define( 'LOGGED_IN_KEY',    ',P,dOf6W|<4;#%k)Is.i}eD6FnG+C&=EfR5ZF[2Ey#?Nf|qf6}ryLyeh.-HaxTT%' );
define( 'NONCE_KEY',        'h,#PN8!YT8H CBh>R6wQv/3<$Vw62K ?#~;T@Ixq6$+;+Lh^s*/yW/wctoU@&LK3' );
define( 'AUTH_SALT',        'iE[8WrVJAh)UiFGy-xc-W-9f_dS.)IBj{n(gbz^r(Vzi5X[m<wqGBo`8@{Cd`s0]' );
define( 'SECURE_AUTH_SALT', '*i=tqrhSS85G{?a^tC2/9nXk(HkVaZf.B(#9J[}G`kK_Ol>b}:T1^2)<}^/_/)C&' );
define( 'LOGGED_IN_SALT',   '|Ttx)W7QUEBq>La*.p^^D~n3@Tu%sQ|9q}.{f$(f-_dc}Vv!ff4@V*JGpW^-%-wa' );
define( 'NONCE_SALT',       'pUkvDTO]0}J&XO#$(&LU5yn<G4c/5?u`p?0EoTogt9h$<5,`FE8I<6gmkoqf^-R9' );

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
