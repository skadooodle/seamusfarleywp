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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'd,C>F]&lTnUWzuN3e)#=VkyWjE4:j;C0]xfLG:+xCZ%`4E_l)<Nb*xtl-HtXCUG1' );
define( 'SECURE_AUTH_KEY',   '}$zV?3>Y]T5:W|E?W^LDbhY!I>jQ5JBPyXFQ{ZnB+;O%O1x`[l/3|:#;!H_f^e_E' );
define( 'LOGGED_IN_KEY',     'xvV#TM.Pq1.ggB}Jp9c!=vk),)>N.d*k7<XX3kn1%@B/6OM-s,5jQZw+f_/!`N9Y' );
define( 'NONCE_KEY',         'hsCOEQZ1hUrIxqC,H6PEbo0ggYp)I`X4%dnFXUW^+LzakEAVW~<}E][H15r!VJ,[' );
define( 'AUTH_SALT',         'ayt&Ug>5-p:9T~[ojI/:]q6zPTR7>@ai}PORH3JohR),84Bfvk@j )=tP*bkM${+' );
define( 'SECURE_AUTH_SALT',  '|J?jK q|@dvHR%?.?(oC-agd9sg>5sqJ!c~0XNs:|[+A2!]clipaZhv/_`Ci*:W0' );
define( 'LOGGED_IN_SALT',    'icO1|>GJ]D.*o,,-{;n {UgXoaI0b>Z2;Az4e<{X*u[E:5Nuz{;m0BGr}w+suiMn' );
define( 'NONCE_SALT',        '/[0D{Vk;3eQp3?05PB[^}Fj^-2I[gG-==jfyf(jy(Fq/lL7L<^P}pf^UI0kxMdef' );
define( 'WP_CACHE_KEY_SALT', 'O_SLs6[{>B6yt^f_9qlt+8lppRC;4j(N,/*6 >kp}i&II4XWhHWG0?p~s$_@2z_P' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
