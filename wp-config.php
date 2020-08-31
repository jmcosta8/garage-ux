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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'garage-ux' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X)WL+3V]FQ(&a,zK2Tg,l;oUKlYn>A}9HRykJ+.nisAqA _|#Zxxg~=`&WdZk(+H' );
define( 'SECURE_AUTH_KEY',  '${h/4Qo^XuE<ELu!I7e;NsP`A8?w31}%50Khjjy$MhS&j<M<OYkj9=O-qn?o{$gK' );
define( 'LOGGED_IN_KEY',    'V3E@*D%-:Ni`gNXL<?N<&(8LUPI/mN~:>T.qdyN(x<Y#/~bGfna(rJ1,hskjY9]>' );
define( 'NONCE_KEY',        'T05-_e:qM>iWu=Uf.Dov<}4~t;Ts*bVyNf=]vG*}DL<1~OYS_?f2K+(@`x:un~3m' );
define( 'AUTH_SALT',        'acWEa|w1aqSt1KRIg_X+Rj}A fQx4$*Rz8u[T4(KPoAlk1l%8%b >]8!Q(KOh!h>' );
define( 'SECURE_AUTH_SALT', '%#Oaw0Oo5>T>}q<k%{)(w;oPkKh.Tpx+Ec27k9Vky. Ym kOS7X&.2~o>FJ0&+lC' );
define( 'LOGGED_IN_SALT',   'm]d5y[!|FVS55`iv=0tv*J|%XDIClDMq&0YTd<Qxt+@$@k*fUsFJi:QRTMFM~JAk' );
define( 'NONCE_SALT',       '`3lZkv~${j@E_ah)8gL{GA[/D)hS;`A%>YJk]jD8}67Ef[l}p`nPBQrA,;zSj)_U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
