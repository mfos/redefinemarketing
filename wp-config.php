<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mfoscouk_redefine');

/** MySQL database username */
define('DB_USER', 'mfoscouk_redefin');

/** MySQL database password */
define('DB_PASSWORD', 'cTMTcEIdXQm8');

/** MySQL hostname */
define('DB_HOST', '10.169.0.129');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o$ZS6Wg3JrE$3B<YZC!N||I @JERqtBt!4{A|u-d>/]R}{kwD}]GqigJi6-&iDNg');
define('SECURE_AUTH_KEY',  '<bv-jY*e-[Em^0oS4pH%[x3m~{UQ*Lxa32VMVD7gls }x+}S8*1BYeK{Vr (Z+V+');
define('LOGGED_IN_KEY',    ';~N<f)0a_&t;Mlu[v%mxk^`OybU1:+BK*eQ(}|s9D3%+vW,;uS8f--Hrg0CggV4 ');
define('NONCE_KEY',        'N[hvoZL%d[kX<18+QU(t<O=uNkf?%-}WEL@`|CL~=L-71rm_+-dUe-Igf+/e7&9(');
define('AUTH_SALT',        '1l<~+Lfm/`I:<=Pi-)h#?o.dHl:>owlq&|QQKh1CXlk{fan]14GB /@6B>69ZP,/');
define('SECURE_AUTH_SALT', 'z0_/zs@BN4,*+4 8,PCgT1LVY{|yq{UTMgR$qVrNqzQqtmbz,WC#QM35$X,F$oLj');
define('LOGGED_IN_SALT',   'iZQIf7_76{tqz =J?p<}[r7+y]kt_#gd}sxTa$os- ZI`P,$/ZTWp)5{.xF{,NyG');
define('NONCE_SALT',       't!@CzwAJ?hL8KjU?FVPSp/|Nyk;s#Hg@yNA&^?xQ:c;t9ZDP,o1.iV=Vb78RO@@f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ycTb_678TAcv';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
