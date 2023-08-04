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
define( 'DB_NAME', 'press' );

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
define( 'AUTH_KEY',         '5JzLmRivh~-+tcNdK.-C!,|bKv:ct5m%Ht_GTyMCnY)i{oN%0[ri%C%/[bEE!(]T' );
define( 'SECURE_AUTH_KEY',  'Bz.):}A|$/8,IXe{vQ#;^X/Ee1F;f!TC73G0Ao@uJ,hcq6ZU-Wu%bk[s;Tx/WA/!' );
define( 'LOGGED_IN_KEY',    'F3bM7__:0X=4HDmyiK*?4C=.{ZtGQ[c92}>&->0[E55-f,]P7I5!HlPz7nNn+Q1F' );
define( 'NONCE_KEY',        '#c&g|^rwU/ssT4zIN)u&!v$eLq:z,#Vl`}pnp!{S4T:0<zGpDg}C[r$XX~+|TRP*' );
define( 'AUTH_SALT',        '=_@~.A7.DJ.%Cn]I=j-2;RO[GI?f1^As`Q <N:3MBtj5r`U5?](}CzqhhrXqEc=~' );
define( 'SECURE_AUTH_SALT', '_+GzlfD0UaEj,InS!gO5v%k=S:hN.!wD$(D(%)~FCfAj{I[9tDKcIf<}y9_4xNWK' );
define( 'LOGGED_IN_SALT',   'U u|ARC{csVw[1d4?5vyKN*c6Dg19@8*Ll)4ciQVu yRQ-ZXl6]6ub&g,NPL-P3k' );
define( 'NONCE_SALT',       'M*R#YIRb+}Sn?oruNCTH_NQVF^%|OEu8q#qQ&xvrJ:M>4bVw9r}{{1$vAWia$@eM' );

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
