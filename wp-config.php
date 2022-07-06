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
define( 'DB_NAME', 'wp_projet_lescale' );

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
define( 'AUTH_KEY',         'WjM&)0$&E{xvZBDR_{K+ClZ>af MIsKL9#F$+Flw>EgOjQkL`xA{wt/m#r>p9}UI' );
define( 'SECURE_AUTH_KEY',  'E:Xv(G#a>pfF(x7?,-$aqgxg,Z&!E.NVw>cWh6P6AC2!9rElYB6h&=2VFFtVF_/l' );
define( 'LOGGED_IN_KEY',    'aV TKV}$xw{^A#(;?]@?p[)j6@O)oKOXBAclr)t})83_J!1TGN5AC>7MHPEp(?kl' );
define( 'NONCE_KEY',        'v/x$7ZMrqLvs)Pqz,:_B)sf;hGr@=|ozF$ W2vj6Jqke&3mVG,GKR*Yy8>|5g7iL' );
define( 'AUTH_SALT',        'toVaum|x.mkZET{*E +YST6Or.CJW{$ /Rgx?eJ)1.)/RxXi[Z/D}LNpR]]*wCp~' );
define( 'SECURE_AUTH_SALT', 'FsU+a^1g8SHn<_=i9T0_A+O3*R&mA`Vk/`a+A3}fD92LEzq?zj@o[oo<pyGLB1m[' );
define( 'LOGGED_IN_SALT',   'i-XynW;:l|Cp]xulV17xPXnt4~Fn$FL50f@Onv-+@sJqyGH(~nX7|)N6F1>xyy~K' );
define( 'NONCE_SALT',       '0^?7@^r#O9.UPFgK}xkn5y3pkL0)Gbs90lGJTJvHTM8m:zci,}-{?<lw1s!w :fJ' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'bvjg_';

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
