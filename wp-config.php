<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '1R~YoEs XWHB+eA}pzIi!0n=Usi$s5^Y)@2T>+QR<-LR j~toN:7[^4#b#{W`;*r' );
define( 'SECURE_AUTH_KEY',  'umCB(JIk}m8s%nf#r8bRE<NjY1b9{zw9*x#9lW/rYk<|8%YJVbp)L2#kiz|4Sq^#' );
define( 'LOGGED_IN_KEY',    '`(AL@Z{A @q]g>+3E]nesd;ggn+q=1Ih6#lETC>rjG.kU-`?K)T<Gy<f?f)):P=k' );
define( 'NONCE_KEY',        '66<B{!+pDi&Mc#fs{n;C=:o43I.~^ZloJW4-z/}ULJBE3X$H0kOEa:ZLX {jp;r8' );
define( 'AUTH_SALT',        'q!bBJrdbhHt6+P{>4j!,aoc5+J $_;Kexs`)&P =H7FdIjBwsY^7S#U3?JyO4)]R' );
define( 'SECURE_AUTH_SALT', 'GTzS=jg+nXM&uyG-E9O)z[X(5|C5|0VmrLFY,9Gdl4%5m:?lYoQ~.2QYw0c[%C}J' );
define( 'LOGGED_IN_SALT',   'PG3m<,yp-h_OsRmrtB[v@)hTF_> l#Tmos2!)Po4S.xtreul@Pr7iXB-Mf?c}hC>' );
define( 'NONCE_SALT',       'XXq~L~IE|T94}.k{1.D-nHrn!_jk[ML*Aj<!XPuCzw/No9ozZS0-RaL@Xr-{a<X,' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
