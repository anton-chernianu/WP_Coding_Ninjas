<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'testdomain');

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

define('AUTH_KEY',         'T+:CPf9/hDNV<;$!~W;yfo-tR@-u`T<gQ6FAqV!&#~0<8GR+7We=;.-qJ WC%u@&');
define('SECURE_AUTH_KEY',  'Z/-9rc5;3AN$%,z`A#7Gl;yFDM|T/vyGC,/]*r?5j_YA[7%uNK-%Bcez%rOO+K0s');
define('LOGGED_IN_KEY',    'm9d6u&VKuvi^Bw+poNw=MC&Q/w1!)YBX) )0dhn6[%P =oq--LT-p+3ZEWba9QU/');
define('NONCE_KEY',        'cX~P8u*(V K4$< %g&T1>w}lUdJVze=s#SOPD34g/#sB+)sCZ;p]EW|$h2~zr,&n');
define('AUTH_SALT',        '#FK;w7h1=l?]`R)L1rTQ]|GJ`H}`@P%%#n1clqe_XoO7 9CMw,]uQU$o`+96*$=B');
define('SECURE_AUTH_SALT', 'BE=%`sh/#|bp4]q^N !H^~[r|`;iXEUbcykT#g+Nt:`GjpKx3?RI%Pnm6Q0B(zu.');
define('LOGGED_IN_SALT',   '6qY%i.|rSTgXZQ!eJSuE1V)f|:-~cu-aDhMFVf(k*E5#l$lnA7@e,Dd-I,8q+czn');
define('NONCE_SALT',       'BfpN%<D:&D$rov{Z6W$3,G),3MD/|zljO)<@GQ&M{z%/b=Jh!XlD@3 0+a^,-rvv');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
