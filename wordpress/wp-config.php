<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'family');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D4S^<&o50U3qvIv>S~v|/d&1H$p{l,S!3U3L-*(,$LBBG).txs;H^o=#fD8VHCqw');
define('SECURE_AUTH_KEY',  'lW7Za}*OD8j.?9-j}YO+ot)40h[DC.! lxODYNJaJ{`%>23[:sesD)S1DL&:XzM_');
define('LOGGED_IN_KEY',    '&WO-6V[0|AL/;xlO}|6rG_7WADszIzI09`>p7z/Zb:0EZ~fK>}>%5Gx:lox:]2p2');
define('NONCE_KEY',        'XN|TF3-0TI0*urz7),(%q]cb*|pcXz|!h~%u##Pj`vrHj>LJq,n1Qe0sslbfP`V{');
define('AUTH_SALT',        'Rb=}T]t1Et~;a3j{]ss`pTZ<IV GL3o9|nv}r6q[Na@#fyt`7!t[p$C_|G*DlNM ');
define('SECURE_AUTH_SALT', ' lY:1SFnRihDmlB`aP^O_ehK$M5)RTY41Kg}r5sCAfY1*.c1^_:JS(@rd9.{R1NU');
define('LOGGED_IN_SALT',   '-LDlmnn~)3GFw=Rwf|keAfh15WjmrW8P7^OnTR #aVk2YOaEx8{:$4D_bph|z%TK');
define('NONCE_SALT',       '#4,~]5hg y~7)}b)a>28tznIN^bW0qIv8H248yGg!O)*}:F4<Tw6Z}zY#%+u3PG_');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');