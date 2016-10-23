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
define('DB_NAME', 'curieuses_expo');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'qS)526Ru[;>DOJzOsi4e*VVN!To5|e~LaPS;Zt5[fX0Ml0W ,75}Ib)=/Q%.,Vqh');
define('SECURE_AUTH_KEY',  'W05:S3EFRf}xM8IeW~8sHPmj-4%Lv(vA]f])]vCa7}|;?[o-`o)w^cR}#uzVaQ[J');
define('LOGGED_IN_KEY',    'q{hRd774}>k]&P}L?%vua^)Vpsi1.`w(}xS[w06/vBV3~=f&]uw-[_@H`WY|2}wl');
define('NONCE_KEY',        '1+<r#C(~ye9fX!bdwE1Q0=3lk5}X^&K@#zNZi1([B];aOjh>AO1yvg#dO.^ToVQ5');
define('AUTH_SALT',        'my{IWp)KI|0R2~TXSPkU1U1-O=X?7z$lv-`kaI+)!+:hYJsLM,C]p]Xfl1m|j_L*');
define('SECURE_AUTH_SALT', '$(V3R^wwFf^f#fy,@JCnWG1/Ndn ~m=& %RU>FTCl$K|m&!ZdFx-bpxD1rw+g-tG');
define('LOGGED_IN_SALT',   's&zYF`x~nw+;V=9glFGs!A(b]E}g2oP]!akndvRlk@am*Dbt%as%|~49MmLunDcH');
define('NONCE_SALT',       'l9s5o@e)lud0;XuPm/w.mlE&u/$l<-,cH1suY`%jf2gcH*2S=FL5/u%svJ5)6f85');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ce_';

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