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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id7542542_wp_c074b589da608877ca19bef28a4cb435' );

/** MySQL database username */
define( 'DB_USER', 'id7542542_wp_c074b589da608877ca19bef28a4cb435' );

/** MySQL database password */
define( 'DB_PASSWORD', '27ffe9a3eb37d109c2c758493cc51d88d9c2853c' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1azlmumUm>1f)@MpDJI}4KXk~{$2dSnb6Wd`wA)_YFDe%r3|cstB8PVI*w0dd9_T' );
define( 'SECURE_AUTH_KEY',  '#2XXHj5|09sZ>e8L3Dh,@)&`?{k>6MOTElP8Q{R3%]mt$@i+&YO`f&njN4Ha*.eJ' );
define( 'LOGGED_IN_KEY',    'm/Fc<[Q#?6L]|INT!rg&)pB+/$B@hr=F}=Y.:tqzB3VoD+v4g4fq8VptZ76MK1dI' );
define( 'NONCE_KEY',        'O4k0y2U9gY0|MfLI55Ml7LRFsb)D<uy0|&.5&;xC.0QrHf&YeNBTrH`miw`SzVb!' );
define( 'AUTH_SALT',        'f;P.6u}9YT 1,lVyt{-7ia!K[X[[]Gbxp~)>.*m_tdN,{&U;F9Jp[`X^K3CO1na[' );
define( 'SECURE_AUTH_SALT', 'pp59Ez4MoX&q7]<1o=w}ChRA:[!Ek-G$>L?fO%,55yWlXsoYpgWGUlc`89Sn$$%p' );
define( 'LOGGED_IN_SALT',   'yIioTudyQc{ait f~B{O{+G9ymMi%xv TUsvn>B4D5MH!C*UZ`2 ?o3%$(g=/-[g' );
define( 'NONCE_SALT',       'Xr[E3K/K1rWcjLIh!>H<TgjM:br!PpB7EI,b.c3.:fkLhU*5pq/+3Ak]UZf!^T3^' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
