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
define( 'DB_NAME', 'jceminentoblog_db' );

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
define( 'AUTH_KEY',         'Wx`*yi>vl]Fo%vcs]}``34>;Dxg!l5R:8bTG.83V|HJs#F<b?ax(#B1<hC3eGCey' );
define( 'SECURE_AUTH_KEY',  '*#%y7@peJ;Hny`XyZY6`rcPqKq(Q-4Vj[$re>A^4h48^e,P7Q8nNidkTsCF>x}NI' );
define( 'LOGGED_IN_KEY',    'W`?vgo9&euYj1YvUX}EBflUD?).1zzO}X(u`A*pAN|7v3XOnxDxh(s;Cb=EkK5N4' );
define( 'NONCE_KEY',        'il86BdUxU,;r|M#]r4KeoI!Vv$Ze;hU9Q+F.U?{c1oS>uyd:>p825.Et@)Px0ygi' );
define( 'AUTH_SALT',        '-IZc%pJXKfsRFJ-+#5dDpBt8 JJ02$U r@3&udVpN&7Q6 )#c~aQ(EgB tWe]J}_' );
define( 'SECURE_AUTH_SALT', 'GCfT.>/E`XGgwMh%TW8zmMX8+.>Fx;HcH**=.g3vO`%d?>kfnRYw[t$]wa?mTd7(' );
define( 'LOGGED_IN_SALT',   '+Jk=CbmkaPGTCK.TSX   IvzUYKkTSxjm@O8}GFCy7BCR`+xcF|*_TO&MOM;?zXh' );
define( 'NONCE_SALT',       '<[Oq0UEemeFrX{pY,KPrf7&1sx9c v_:1f;gTH]Nl>8eU {rRo^@%S^56,r75l;u' );

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
