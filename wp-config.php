<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_test_6' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|{4AwQ>Ft;Smyogv9,q5>RyH{Q{(`p0@>{ zy8OoQLM{L{4vu9(X(C/!9KDeeOhr' );
define( 'SECURE_AUTH_KEY',  '=`F)>WAWD02^E./.XJVg){W0&(yVK9C-hl2-d?)ubIL2x?D|t:IC1A/A>}?qQs.N' );
define( 'LOGGED_IN_KEY',    ';L~PT%t54]hIMsHL3W]?vLjCSOKj&pgr~B)+vKNhW1e)j=OnH~snokg|C=Gn[/4>' );
define( 'NONCE_KEY',        'e$;H%N1PY%=9s-/0j{0H*046DC31$U4S1jU{4y+&PK7oiuj9<&;l[K@k|<CQ09$7' );
define( 'AUTH_SALT',        'J8ux5*]jl~VWn(_P]AqqBwyMr={qFZJiIjze*1;Y6bP`jth2 1r+ iK}7NP 6z~m' );
define( 'SECURE_AUTH_SALT', '1J`]P0{0BayO|8aNeRfmEHg0OxL9(0!?DB*RgPTL4iTvtAcr8ETQF^)|^o56y^1@' );
define( 'LOGGED_IN_SALT',   '~?9<>tj*0]9Qk+naxbH+f6> )c:UqCySJ*|B[-:L#:V407p`0^57V+29oZ&yhTD3' );
define( 'NONCE_SALT',       ';DrdiT#%zD=7$i;!Z*/i/T)G+F}IXWC2huBt{b?/txXAgZV$1v4Ms&pcUx8l4^*|' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
