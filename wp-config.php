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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'almabroo_wp668' );

/** Database username */
define( 'DB_USER', 'almabroo_wp668' );

/** Database password */
define( 'DB_PASSWORD', '1pV53(S93.' );

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
define( 'AUTH_KEY',         '6ivymtpyc04k2zury93iiy5ymsudpluosrof1iynruniecay2nmev2b4ixi36lfg' );
define( 'SECURE_AUTH_KEY',  'cynorupt7v1vwcvyzesyidmfpxc0hyzyatkwal0glp3q33dxwmjmdqeaeeprbd8i' );
define( 'LOGGED_IN_KEY',    'ybj70y8wxdxhrtpsoww3gbrzegjmrqa8rru4as6iaemhzqojbpspqbpgeo4xp3p0' );
define( 'NONCE_KEY',        'z2cxrvm8sxnryg3zsb4vjru6cab1bmvx8ndal4pqxahweex4m7qasxvbwlcttb0k' );
define( 'AUTH_SALT',        'dekfgodlnfz5n7fhuljc2pbfytrm6xjl6ltdc5yw1hw2axbnonz9xukwimzfv9bj' );
define( 'SECURE_AUTH_SALT', '7asybhbdxr04vpbowk7udx822vpnn4eiqs46huinf8ci4nbl0jy5tpzgakpeo4lr' );
define( 'LOGGED_IN_SALT',   'bsicptf60kxxgrguuecvtxqhpfmvib85gapiks1qwno0lcv2fkywumkzmxaoiwv1' );
define( 'NONCE_SALT',       'zbxbapuwmhylve8ruwmsizywwqd0nrhjmjwqnr60ixnsuer2u18wflxps865qhn2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpau_';

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
