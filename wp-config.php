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


define( 'WP_HOME', 'https://sandbox-lescashistoires.alwaysdata.net/' );
define( 'WP_SITEURL', 'https://sandbox-lescashistoires.alwaysdata.net/' );

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'sandbox-lescashistoires_bdd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', '223911' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'LA.muette.rieuse13' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mysql-sandbox-lescashistoires.alwaysdata.net' );

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
define( 'AUTH_KEY',         'SNS_A@DkWn/>A)?yB]8_@vnj4;CgO@{h: e^(XGx$:Bc%B;QmL)j*7,%L?lP V<@' );
define( 'SECURE_AUTH_KEY',  '9liSi3FD38(GoN:<<b0Raw^ZzK-v;J<MU%M4DOn(WngvKSvrUP:S&>MXA!HyM*JU' );
define( 'LOGGED_IN_KEY',    'vY?(xVy!UKhMH!],75lyyW@|Wi^[DNm7C.YzlV0} HniXz/;?AE @[5OE.FpJ1R)' );
define( 'NONCE_KEY',        '_(&{15~i4WqXSnqipA&<,&e]cB*QJvA9$e;.m~Yh%!-Y(*;i$iu62qgs`[Z~zFp<' );
define( 'AUTH_SALT',        'tS=!8@4k@1#TnA=3vsZ?ZH+;G);AmmYUXDnm-`),};]W:[C&[Ex~*eCLb)5(U2-q' );
define( 'SECURE_AUTH_SALT', '1D(8./<&~AE-Oesjuo7.#jW(a-Vnz>},J/JjcwlmxcR34eJ&{e_Dh3,A>X63IkuO' );
define( 'LOGGED_IN_SALT',   '11T~ ,]MGXz;3)k5<tkrQeDH$*G0QYYtv9*<9J:K|mHms,Fd3&!OA2w(W@#2-Cr_' );
define( 'NONCE_SALT',       '8oM=W7Id+Z}s&|p-seB|uPPGt5Sd(#H+D1C*;YsFgl7vGD3NrXyVJg]^qQ9PBY5F' );
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
