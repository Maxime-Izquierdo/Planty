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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '9Vg)y;|xZot-.]XL0}/% -&Cu_2;tN(SjUVDRL^~7D4Rbb(ufEs`Nx>}(UjO`d_/' );
define( 'SECURE_AUTH_KEY',  'sl}0Hsd#R&3W/^1tE47$H{B<p=hX21C+VV~Ua|5a/dhO9}<!BdUUPun=n_/@6f$$' );
define( 'LOGGED_IN_KEY',    'y>+z1L:_GeFA,Tx-r39EX|%)xw,_W zdVtgnog&eyHDSu(y+h G}j=8OeD}Bk;|[' );
define( 'NONCE_KEY',        '!;+GwdjV)3fy$#INEw(TMzf<D?0]?IOP/S{B7ZRqc^L%q!y_FGZYnKyL2d.gxLft' );
define( 'AUTH_SALT',        'Y+b.Z5TD-JE;B}.b@m58xUE-;S}OUa-LbeBN<*( {SW/T~9W,-^gv/UD.}nnLMPi' );
define( 'SECURE_AUTH_SALT', 'F0fdaQ05Ht@9{[A!*`{5E[+[L>SdkqC8^,h#zx#W/hPNV!Dt6a1&XD=ih[7<tZ/l' );
define( 'LOGGED_IN_SALT',   'ku^HvWHv?14;aNH~{acGNC,-xx_iv. !SVHz7|Wfk4T+9Ha&.b*Xs}i5]B&7-G`e' );
define( 'NONCE_SALT',       'V9$OI5qxTAvGw(aWCx<0_4}XT$^_|3iY&.diqdptXyVv`m5{F;oO8QSOZYq{KH_~' );
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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
