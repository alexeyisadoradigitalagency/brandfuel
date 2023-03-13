<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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

define('DB_NAME', 'isadorad_brandfuel');



/** MySQL database username */

define('DB_USER', 'isadorad_id16');



/** MySQL database password */

define('DB_PASSWORD', ',yG$2sqV#e^3');



/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8mb4');



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

define('AUTH_KEY',         '?0*HP:gQ_,[jzkjQ.G}M^l1^N>Pk{m*95NgxTdx{XT/LTFLWOTSyGs<mNw*ZJ7{I');

define('SECURE_AUTH_KEY',  '0fa:BRD$L02bscqDbRDjL`/2QmJ,:m+O_b)J*1$8oghng$S|8e!|0 iu7}B z]}n');

define('LOGGED_IN_KEY',    'GKS=o&KU% MfAYY_W;l+RdU[9]x*.zxDCrj~&rfW1tX!!T(8rF}Z@U_GJKQpHSq4');

define('NONCE_KEY',        '9[}FG9xeYw*^~=4.59X&uqp:af!2N7^OwO#C9_4YHjW$D%<PMxNazBk(lr2L,D`$');

define('AUTH_SALT',        'Z&d5SF}SyzR+pGPJ4!wLWnrs5F(7.j[g,sQ&nNo-?#Q0rjN&I)FOv]fRdJXs[Xii');

define('SECURE_AUTH_SALT', 'DQ0/M$ei.>F`y2rk;JX8{y6 La4sbZ=-VezD. a5Gy^a_:JHC,*gjRI(GjxURmLl');

define('LOGGED_IN_SALT',   'b%5$w/S%nvKhJ1FF*>i|a)c/&>Vo OG$/o7s7a^c?IHtYi&yU$|(cD4PH/K&jl@6');

define('NONCE_SALT',       '>UK*kV_|TxXJP/5~]UR1d6xvq5Y$*#2#XEAX1+5Uz&|O,:-K/Zd^n{.]QG%::mmO');



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

define('WP_DEBUG', false);



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

