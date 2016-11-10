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
define('DB_NAME', 'db653102331');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo653102331');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'JQ9en00g');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db653102331.db.1and1.com');

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
define('AUTH_KEY',         't)CgSxq8inM4R+3)gng%V1d!2J,*wgHnT~IfjZ:CvlxyHn4G3O<e<b.0m4[2$p|?');
define('SECURE_AUTH_KEY',  '80_H?=tH{G?mxH+BRiE+_<2re}Z=Pwiw,!yPx|F|DFJ5xKq/hxPt_rVQOL$#y$a3');
define('LOGGED_IN_KEY',    '`?6#E0j;Dhvn-sRIcyPGolpSyc{S4OQ `O]MX/</h:sM/&+jnPFiyO4bi6?{+RRX');
define('NONCE_KEY',        'h1;$_&iV|a}>D656LCl&<xlh*1b|^CQR~p 3IEB8*),@l[eNhd;%tb1v%fR~]x67');
define('AUTH_SALT',        'o]aCR,!QaRAdR;:gNXIAb|5K[.!9A:l:G9F*Fl(cq.qWTG9~0;vx^?.A*:gkq9F#');
define('SECURE_AUTH_SALT', 'I{fF|/~TxL,V@SS-@AT(XwA^z8WU{^|kxY#pECWe(r5USj?~;q[*Zhz;1**?%cT1');
define('LOGGED_IN_SALT',   '>.Q#qjv[Pp-`]ij(>uwXK~qA{S{oWqp9|fh]zQMgyVllab6Gl](7*SB`0~k#V.fL');
define('NONCE_SALT',       'I$+Kd .U{`03NAq0u-6rWZMU=e[M<]1)~ecYll(yds:kz,>JhZ~K.2bMVDjzrA/D');
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
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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