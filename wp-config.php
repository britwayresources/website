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
define('DB_NAME', 'auticsg_britwayresources');

/** MySQL database username */
define('DB_USER', 'auticsg_jason');

/** MySQL database password */
define('DB_PASSWORD', 'jasonbti4DB');

/** MySQL hostname */
define('DB_HOST', 'mysql1207.ixwebhosting.com');
//define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r;/GPcQC0PF-c* }li?HuXjRw%.j+O^)NQm$Z1)U] NVfTT[n-@,v4-J;TAZC]<~');
define('SECURE_AUTH_KEY',  '(?WfVd4j>whUr&3/[(8Hbh4Un%nxrc)+.jJAr4R-%-0?$<&^pPWKw?:W.?--ZK?l');
define('LOGGED_IN_KEY',    '1Q=$6=so3lupnx*p1<PVI-zg!hM6I+<cfB/KR.O~~/p^R#F}Y+O|oa&hAE[W^.%_');
define('NONCE_KEY',        ' U%y~x[,cp>B<at=;eYHe$M=|Rd|XM*#49m*Wri>m+C:`Hn{6a7{%uvc}0BN`+ 5');
define('AUTH_SALT',        '.bf^cH$+]EzQs{Uwxv_OS(]}_rJE`j^o*V]6|{K}+@U4Kp-I,Nu~*bI<-W|]dE< ');
define('SECURE_AUTH_SALT', 'b$L+!`C{<;P*-*s$-=fs-z!9$kT$mesR*TL}Z$50ZK[nhd2H}:+^9])/.8a>D7Z1');
define('LOGGED_IN_SALT',   'qopVmt~cO|+W!) *i5gN1-zvT3zgvx%M$;.xMhv.z5UKsF:-vk6&&:$+4#{AIY&n');
define('NONCE_SALT',       ']r]8/s~mNjz+YsUzP){0lGH+d/|6Kf76O9z*6@E8.;o/%SFH<#~Cu[Oq|Yhb#-`R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bw_';

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

/**
 * BEGIN - Extra configuration for Britway Resources
 */
# Disable all core updates:
define( 'WP_AUTO_UPDATE_CORE', false );

//disable the plugin and theme editor
define( 'DISALLOW_FILE_EDIT', true );

//remove the option of updating and installing plugins and themes
define( 'DISALLOW_FILE_MODS', true );


/**
 * END
 */


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

