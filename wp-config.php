<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
 * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
 * E' possibile trovare ultetriori informazioni visitando la pagina: del
 * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. E' possibile ottenere le impostazioni per
 * MySQL dal proprio fornitore di hosting.
 *
 * Questo file viene utilizzato, durante l'installazione, dallo script
 * rimepire i valori corretti.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'wordpress');

/** Nome utente del database MySQL */
define('DB_USER', 'spritz');

/** Password del database MySQL */
define('DB_PASSWORD', 'spritz');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0Mt;4Mkp$#{K6Wh2~.8{R1z{Cf3Ngy#nyY=^?fL~Hk%I+/|J3yx ;L(6JZ]/i%k;');
define('SECURE_AUTH_KEY',  'de8dSd7[BG9V}}|%=x8Xs_S}IEqdv%O6*xWCpD}[PLX>&zV~8wO`_fTd7~8]=~W$');
define('LOGGED_IN_KEY',    'kP/aYS{C$a*Z,(Y3I-3b]+B~<:@<+Q&`o!z>Jys^[=*l/$,fo ~!=RHYQD<qA6We');
define('NONCE_KEY',        'sVoSD|J|#q--8M3{SQvZ.V3N+kpY`]jK{W%m2JAQpf(xc^tWh0|#%%H{EF:_6Um0');
define('AUTH_SALT',        'vx 6[xhH^)!1q9-]-oVEtKZ)VVwYztz--.t0.[WVV>!G?8`)eKz-1 O3ya_eczeY');
define('SECURE_AUTH_SALT', 'P!sqAL:6~+xCU~UlzZiWCrF<R?]p<hYOv|kF#|dSZevl}`>mGw14UUBJ&#EVJS-8');
define('LOGGED_IN_SALT',   '>O^</8puLoy4ZFyX062-EVCAJ|tkiFMCWDA8+uo5~xp`mO68i!^-`g,1i)lu9<Ul');
define('NONCE_SALT',       'Aql5;+2Oe]<fe|$EV8<e+{Hl`_)_H?d;wQ^gvAOr6(u#0v_%5*4L+`a*G-F~m&%F');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress .
 *
 * E' possibile avere installazioni multiple su di un unico database if you give each a unique
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Lingua di Localizzazione di WordPress, di base Inglese.
 *
 * Modificare questa voce per localizzare WordPress. Occorre che nella cartella
 * wp-content/languages sia installato un file MO corrispondente alla lingua
 * selezionata. Ad esempio, installare de_DE.mo in to wp-content/languages ed
 * impostare WPLANG a 'de_DE' per abilitare il supporto alla lingua tedesca.
 *
 */
define('WPLANG', 'it_IT');

/**
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all'interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'spritz.localtest.me');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define('SUNRISE', 'on');

define('FS_METHOD', 'direct');

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');

