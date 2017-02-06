<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 * 
 * Please note if you add constants in this file (i.e. define statements) 
 * these cannot be overridden in environment config files.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */
  

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
define('AUTH_KEY',         'HA49e jxZ<)/:~?qq)tZ:6?|SyDcC.hI7$.$Epu>eQY11%{#!:7HF5Mhfgo.$_)G');
define('SECURE_AUTH_KEY',  'Pm+K0J,A+GLqE)ABs4/lXX@tua{l;PVj3!8a&7|TB4{!L3,/O|FcfJqgFi4&|C%]');
define('LOGGED_IN_KEY',    'C=-7o$1#.vK]4kDjpP~OG!^,%Lp9A.:?.cZ04iqP%T:<)ldlNM0s=G^/bUoAeqJ.');
define('NONCE_KEY',        'O9[8P<xLH#`7QCG9e!0~5V)8tVek9#e/F?)y|&Oi2bqn[bcgArIHY<J^MiAfsJgA');
define('AUTH_SALT',        'ZO2EGMgx0GFO]!U2=TG&<b/K;lxfVG[:o{effz1zR^FitPC9rnk+I^[x?*P>r72c');
define('SECURE_AUTH_SALT', ']JS1@L5nk-xH~5Y] +Gv$;;@}#(}@7},l|0k<k+XQ4tlps_m[UxfZG]05H+qR%LT');
define('LOGGED_IN_SALT',   'annL6Kwh-)]Kn|0n!T0jgniHU|vK>%S}$F5(w>-A^;e*[z:hAgFk*4HV!g6d,6ao');
define('NONCE_SALT',       '.4:jR_9]i`7Y0A%YkwqB5W71?m|n_!A#B<ucpfEeoR&gmmtVM>R(m=J*G)pRu&Mc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
