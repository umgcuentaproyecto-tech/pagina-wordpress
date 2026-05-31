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
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'RffUJRBcxqNfXqhHJvfknTrcCbsniGGB' );

/** Database hostname */
define( 'DB_HOST', 'zephyr.proxy.rlwy.net:28098');

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
define( 'AUTH_KEY',         'ANbMQ5jY~`S_ADQM)9i^@oVneVu.:t5LD5ltkmb|}lD$$#)9Yamr8sOlV[g:vUd{' );
define( 'SECURE_AUTH_KEY',  'v-nLFOi#L#/km[;sLH=-1R~<A5|+*0Vq2@)z*OG|Ipnn7JiL<[}Ykv(9e!/9CI`<' );
define( 'LOGGED_IN_KEY',    'V:A<m98|ZgG%NDLt)N5,@dj/eid/Y>N5 )hApLYP(q3j=%4sd@OQqu)>dn!Y2Q~|' );
define( 'NONCE_KEY',        'mHKa:8ZV[@t:>v{m5:)h`a&;b_t!hf3so&Sh8LzKH9y{fl,&EE(tbqb[j{VZKVEO' );
define( 'AUTH_SALT',        '%U%2L`M9~mn*w5$m`:cTZo9/=j)nYew7!5I35w`(s]D]]:sUg5GbDgIoQ9!,O!5X' );
define( 'SECURE_AUTH_SALT', 'k9[)RZb!p0HD}(:?k?`<l+O6s$:SoIo4}~$m|JY9kz8[J?w{H#|5[z:.pR}Yv`~y' );
define( 'LOGGED_IN_SALT',   '{s2~yy[,VL*g[&zs^UFLmYP(E;^s~J2A|#^5/MNnPu`3/X),}8]m6dnIma<s.>y1' );
define( 'NONCE_SALT',       'JiB>Q3d+.5V&#?z;Jw?G86pi_d4$$P*KW@gQ<@`K2[Ml|joJCFmDLW{bE}lbk+,4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'td_';

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
