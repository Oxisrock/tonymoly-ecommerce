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
define('DB_NAME', 'tonymoly');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '_O9a)aZ;IhQjj1-3#3ol2{HGP<dQ^>!pHv8</c{)]&`#hNE{J+4`=B)X$Xr!Y#!.');
define('SECURE_AUTH_KEY',  'i-d>cgMPW76hD$L3QVe;q`!]5-b6!0x ]y_XsRR`>|ycW02EMQOL~WT|MqKmf>R|');
define('LOGGED_IN_KEY',    'B$;a||S|r5m1TzdqV4-Rm5dh0A$N-[sd~?B$Y!t7ovf`i.V*,?U@6yaEItw>YX|l');
define('NONCE_KEY',        '|r%B|G|A|`t!+O`^If+l|+x,Ol,u?HCYhUGA/ijxZ~25[#rlCRE[wa@kQT>1Pf[J');
define('AUTH_SALT',        'dizD~MxR%o3[+nir=xxz-e^K~bP9&  uwX4b>}PMDr+`6+i )SxRCr95?lfV]4|r');
define('SECURE_AUTH_SALT', 'M*a#V?IC;lW%V0-8r%K%~MW#8TG]!~x[@DW0i>)GtQSY2Ll0i[,yEq3Pdg<owNYW');
define('LOGGED_IN_SALT',   '|o-A}lxrf h)UHM7PA+k.oZ=mg){p &EE!ZW!f3x(Q2h/fr+;Y:vKTJ%3][3+(`j');
define('NONCE_SALT',       'dvET_f^HXmx9&YqVo|>e&bh)i*y`{oSul$s%p|z-QqW,<G9{M$a;WL2n#[/N;vOB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');